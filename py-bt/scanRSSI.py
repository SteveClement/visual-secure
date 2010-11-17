# performs a simple device inquiry, followed by a remote name request of each
# discovered device

# ToDo:
# Add debug flag for print statements

## Only first scan needs to be as root!!!!

import os
import sys
import struct
import bluetooth._bluetooth as bluez
from pysqlite2 import dbapi2 as sqlite
import lightblue
import datetime, time

def number_of_devices():
	dev_id=0
	while bluez.hci_open_dev(dev_id).fileno() != -1:
		dev_id = dev_id + 1
	print "You have %s Bluetooth devices" % dev_id
	return dev_id

def printpacket(pkt):
    for c in pkt:
        sys.stdout.write("%02x " % struct.unpack("B",c)[0])
    print 


def read_inquiry_mode(sock):
    """returns the current mode, or -1 on failure"""
    # save current filter
    old_filter = sock.getsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, 14)

    # Setup socket filter to receive only events related to the
    # read_inquiry_mode command
    flt = bluez.hci_filter_new()
    opcode = bluez.cmd_opcode_pack(bluez.OGF_HOST_CTL, 
            bluez.OCF_READ_INQUIRY_MODE)
    bluez.hci_filter_set_ptype(flt, bluez.HCI_EVENT_PKT)
    bluez.hci_filter_set_event(flt, bluez.EVT_CMD_COMPLETE);
    bluez.hci_filter_set_opcode(flt, opcode)
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, flt )

    # first read the current inquiry mode.
    bluez.hci_send_cmd(sock, bluez.OGF_HOST_CTL, 
            bluez.OCF_READ_INQUIRY_MODE )

    pkt = sock.recv(255)

    status,mode = struct.unpack("xxxxxxBB", pkt)
    if status != 0: mode = -1

    # restore old filter
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, old_filter )
    return mode

def write_inquiry_mode(sock, mode):
    """returns 0 on success, -1 on failure"""
    # save current filter
    old_filter = sock.getsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, 14)

    # Setup socket filter to receive only events related to the
    # write_inquiry_mode command
    flt = bluez.hci_filter_new()
    opcode = bluez.cmd_opcode_pack(bluez.OGF_HOST_CTL, 
            bluez.OCF_WRITE_INQUIRY_MODE)
    bluez.hci_filter_set_ptype(flt, bluez.HCI_EVENT_PKT)
    bluez.hci_filter_set_event(flt, bluez.EVT_CMD_COMPLETE);
    bluez.hci_filter_set_opcode(flt, opcode)
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, flt )

    # send the command!
    bluez.hci_send_cmd(sock, bluez.OGF_HOST_CTL, 
            bluez.OCF_WRITE_INQUIRY_MODE, struct.pack("B", mode) )

    pkt = sock.recv(255)

    status = struct.unpack("xxxxxxB", pkt)[0]

    # restore old filter
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, old_filter )
    if status != 0: return -1
    return 0

def device_inquiry_with_with_rssi(sock):
    # save current filter
    old_filter = sock.getsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, 14)

    # perform a device inquiry on bluetooth device #0
    # The inquiry should last 8 * 1.28 = 10.24 seconds
    # before the inquiry is performed, bluez should flush its cache of
    # previously discovered devices
    flt = bluez.hci_filter_new()
    bluez.hci_filter_all_events(flt)
    bluez.hci_filter_set_ptype(flt, bluez.HCI_EVENT_PKT)
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, flt )

    duration = 4
    # Maybe bottleneck if more than 255 devices in one spot
    max_responses = 255
    cmd_pkt = struct.pack("BBBBB", 0x33, 0x8b, 0x9e, duration, max_responses)
    bluez.hci_send_cmd(sock, bluez.OGF_LINK_CTL, bluez.OCF_INQUIRY, cmd_pkt)

    results = []

    done = False

    # Database connection handling
    connection = sqlite.connect('bt_fun.db')
    connection.isolation_level = None
    cursor = connection.cursor()

    # Main scan loop
    while not done:
        pkt = sock.recv(255)
        ptype, event, plen = struct.unpack("BBB", pkt[:3])
        if event == bluez.EVT_INQUIRY_RESULT_WITH_RSSI:
            pkt = pkt[3:]
            nrsp = struct.unpack("B", pkt[0])[0]
            type(nrsp)
            for i in range(nrsp):
                addr = bluez.ba2str( pkt[1+6*i:1+6*i+6] )
                rssi = struct.unpack("b", pkt[1+13*nrsp+i])[0]
                results.append( ( addr, rssi ) )
                # resolve Bluetooth names via lightblue
		try:
			addr_name = lightblue.finddevicename(addr)
		except:
			print "could not resolve: ", addr
                # Making sure we are in utf8 mode
		addr_name = addr_name.decode("utf-8")
		# Current time stamp
		now = time.strftime("%Y-%m-%d %H:%M")
		# Execute Query
		#cursor.execute('INSERT INTO auto_device VALUES (?, ?, ?, ?)', (addr, addr_name, rssi, now))
		#cursor.execute('INSERT INTO locate_device VALUES (?, ?, ?, ?, ?)', (addr, addr_name, bearing, rssi, now))
                #print "[%s] RSSI: [%d]" % (addr, rssi)
		query = u'INSERT INTO auto_device VALUES ("%s", "%s", %s, "%s")' % (addr, addr_name, rssi, now)

		# uhhh, exception handling
		try:
			cursor.execute(query)
		except:
			print "Query failed"
#		print query
        elif event == bluez.EVT_INQUIRY_COMPLETE:
            done = True
        elif event == bluez.EVT_CMD_STATUS:
            status, ncmd, opcode = struct.unpack("BBH", pkt[3:7])
            if status != 0:
                print "uh oh..."
                printpacket(pkt[3:7])
                done = True
##        else:
##            print "unrecognized packet type 0x%02x" % ptype


    # restore old filter
    sock.setsockopt( bluez.SOL_HCI, bluez.HCI_FILTER, old_filter )

# Write tables
    connection.commit()
    cursor.close()

    return results


# default device should be laptop but upon wake up USB bus gets re-shuffled

# This part is ugly but necessary to have an idea where the Bluetooth Device antennae point
# if you have no clue what number is north, just launch a scan an note down the sequence of the flashing lights, (from 1 to x where x is the hci number)

num_adapters = number_of_devices()

if num_adapters > 0:
	for i in range(0, num_adapters):
		if i == 0:
			bearing = "laptop"
		if i == 1:
			bearing = "north"
		if i == 2:
			bearing = "east"
		if i == 3:
			bearing = "south"
		if i == 4:
			bearing = "west"
		if i > 4:
			bearing = "hci%s" % i
		dev_id=i
		print "Scanning via adapter number:", dev_id
		try:
			sock = bluez.hci_open_dev(dev_id)
		except:
			print "error accessing bluetooth device..."
			sys.exit(1)

		try:
			mode = read_inquiry_mode(sock)
		except Exception, e:
			print "error reading inquiry mode.  "
			print "Are you sure this a bluetooth 1.2 device?"
			print e
			sys.exit(1)
		#print "current inquiry mode is %d" % mode

		if mode != 1:
			print "writing inquiry mode..."
			try:
				result = write_inquiry_mode(sock, 1)
			except Exception, e:
				print "error writing inquiry mode.  Are you sure you're root?"
				print e
				sys.exit(1)
			if result != 0:
				print "error while setting inquiry mode"
			print "result: %d" % result
		device_inquiry_with_with_rssi(sock)
		#time.sleep(1)
else:
		bearing = "laptop"
		device_inquiry_with_with_rssi(sock)
