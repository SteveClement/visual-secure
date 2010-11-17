#!/usr/bin/env python
#
# shodan_ips.py
# Search SHODAN and print a list of IPs matching the query
#
# Author: achillean

import shodan
import sys

# Configuration
API_KEY = "6EKzVgwUGk7cRAXWHVrpEMphyVVNqUb0"

# Input validation
if len(sys.argv) == 1:
	print 'Usage: %s <search query>' % sys.argv[0]
	sys.exit(1)

try:
	# Setup the api
	api = shodan.WebAPI(API_KEY)

	# Perform the search
	query = ' '.join(sys.argv[1:])
	result = api.search(query)
	
	# Loop through the matches and print each IP
	for host in result['matches']:
		print host['ip']
except Exception, e:
	print 'Error: %s' % e
	sys.exit(1)
