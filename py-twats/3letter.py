#!/opt/local/bin/python2.6

import itertools
from string import ascii_lowercase
#import twitter
import datetime, time
#from pysqlite2 import dbapi2 as sqlite
import urllib2

# Database connection handling
#connection = sqlite.connect('3letter.db')
#connection.isolation_level = None
#cursor = connection.cursor()

#query = u'INSERT INTO data VALUES ("%s", "%s")' % (user, now)

count = 0

# We now have a string of the alphabet in ascii_lowercase
complete_charset = ascii_lowercase + '_0123456789'
product=itertools.product(list(complete_charset), repeat=3)

for s in product:
  # Current time stamp
  #now = time.strftime("%Y-%m-%d %H:%M")
  user = ''.join(s)
  try:
    url = "http://www.twitter.com/" + user
    result = urllib2.urlopen(url)
  except:
    print user + " is still available"
    #cursor.execute(query)
  count += 1
  print count + "of 50653"
  #time.sleep(30)
