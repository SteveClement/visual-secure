#!/usr/bin/env python

import lightblue
import bluetooth
import bluetooth._bluetooth as bluez


target_name = "My Phone"
target_address = None


# Scanning for devices

print 'Searching for Bluetooth enabled devices'
# Lightblue scan
#scan_devices = lightblue.finddevices()

>>> import sys
>>> from cStringIO import StringIO
>>> 
>>> old_stdout = sys.stdout
>>> sys.stdout = stdout = StringIO()
>>> import scanRSSI
>>> print sys.stdout
>>> print stdout
>>> sys.stdout = old_stdout
>>> foobar = stdout.getvalue()


dev_id = 1

sock = bluez.hci_open_dev(dev_id)

nearby_devices = bluetooth.discover_devices()

for bdaddr in nearby_devices:
    if target_name == bluetooth.lookup_name( bdaddr ):
        target_address = bdaddr
        break

if target_address is not None:
    print "found target bluetooth device with address ", target_address
else:
    print "could not find target bluetooth device nearby"


