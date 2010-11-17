#!/usr/bin/env python

import dbus

# Small hack to perform the following dbus actions: 
# Change Bluetooth visibility
# Change Bluetooth friendly name
# Enumerate Bluetooth Devices

#session_bus = dbus.SessionBus()
#system_bus = dbus.SystemBus()

#proxy = bus.get_object('org.bluez', 'org.bluez.Manager.DefaultAdapter')

import dbus

bus = dbus.SystemBus()
manager = dbus.Interface(bus.get_object('org.bluez', '/org/bluez'), 'org.bluez.Manager.ListAdapters')

adapter = dbus.Interface(bus.get_object('org.bluez', manager.DefaultAdapter()), 'org.bluez.Adapter')

obj = bus.get_object("org.bluez", "/org/bluez")
manager = dbus.Interface(obj, "org.bluez.Manager")
list_adapters = bus.get_object("org.bluez", manager.ListAdapters())

