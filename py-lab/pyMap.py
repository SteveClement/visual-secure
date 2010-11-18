#! /usr/bin/env python

# Set log level to benefit from Scapy warnings

import nmap
import os

nm = nmap.PortScanner()
nm.scan(hosts='192.168.1.*', arguments='-n -sP')

outp_arp = os.popen('arp -an |grep -v incomplete')

MAC_Match = '([a-fA-F0-9]{2}[:|\-]?){6}' # this is the regex

for output in outp_arp:
	output = output.replace('\n','')
	output2 =  re.compile(MAC_Match).search(output)
	if output2:
		MAC = output[output2.start(): output2.end()]
	print MAC
