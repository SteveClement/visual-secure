#!/usr/bin/env python
#
# shodan_ips.py
# Search SHODAN and print a list of IPs matching the query
#
# Author: achillean

import shodan
import sys
import codecs

log = codecs.open('output.log', encoding='utf-8', mode='w+')

# Configuration
API_KEY = "6EKzVgwUGk7cRAXWHVrpEMphyVVNqUb0"

# Setup the api
api = shodan.WebAPI(API_KEY)

for line in file("amIinShodan.txt"):
	line = line.replace('\n','')

	try:
		host = api.host(line)

		log.write ("""
		        IP: %s
		        Country: %s
		        City: %s
		""" % (host['ip'], host.get('country', None), host.get('city', None)))
	except Exception, e:
		log.write ('Error: %s %s' % (e, line))

log.close()
