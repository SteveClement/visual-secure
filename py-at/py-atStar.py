import sys
import bluetooth
from types import *

deviceName = []
deviceAddress = None

foundDevices = bluetooth.discover_devices()

count = 0
while count == 0:
    print ""
    print ""
    for bdaddr in foundDevices:
        deviceName.append(bluetooth.lookup_name( bdaddr ))
        deviceAddress = bdaddr
        print "%2d  %-16s Address: %s" % (count +1, deviceName[count], deviceAddress)
        count += 1
    choice = raw_input("Choose Device or 0 to repeat scan: ")

    # Repeat scan to get more device names
    if (choice.isdigit() and int(choice) <= len(foundDevices)):
        count = int(choice)
        if choice > "0":

            print "\n-- Select device, 0 to repeat scan or q to quit --"
            print ""
            selected = deviceName[count -1]
            deviceAddress = foundDevices[count -1]

            if deviceAddress is not None:
                print ""
            else:
                print "Could not find a Bluetooth device"

    elif choice == 0:
        count = choice  # Repeat the while loop and device scan again
    elif choice == "q" or choice == "Q":
        exit(0)



services = bluetooth.find_service(address=deviceAddress)
#devicename = bluetooth.lookup_name(deviceAddress, timeout=10)

for svc in services:
    # Look for DUN port
    if  type(svc["name"]) is not NoneType:
        if  svc["name"].lower() == "dial-up networking":
                dunPort = svc["port"]

s = bluetooth.BluetoothSocket(bluetooth.RFCOMM)
conn = s.connect((deviceAddress, dunPort))

s.send("AT*\r")
print s.recv(1024),


s.send("AT+GMI\r")
print s.recv(1024),
print s.recv(1024),

s.send("AT+CGMI\r")
print s.recv(1024),
print s.recv(1024),

s.send("AT+GMM\r")
print s.recv(1024),
print s.recv(1024),

s.send("AT+CGMM\r")
print s.recv(1024),
print s.recv(1024),


s.close
sys.exit(0)
