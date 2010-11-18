#!/usr/bin/python

import obexftp

obex = obexftp.client(obexftp.BLUETOOTH)

#devs = obex.discover();
#print devs;
#dev = devs[0]
dev3 = 'C8:97:9F:C9:B1:77'
dev2 = '00:22:FD:3B:32:D5'
vc_file = 'pb.vcf'
obex_object = "telecom/pb.vcf"


print "Using %s" % dev3
channel = obexftp.browsebt(dev3,0)

print "Channel %d" % channel
print obex.connect(dev3, channel)

data = obex.get(obex_object)

# Write data to file
file = open(vc_file, 'wb')
file.write(data)

# Clean up connectio
print obex.disconnect()
obex.delete

