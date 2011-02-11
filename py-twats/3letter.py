#!/opt/local/bin/python2.6

import itertools
from string import ascii_lowercase
import twitter

count = 0

api = twitter.Api()

# We now have a string of the alphabet in ascii_lowercase
complete_charset = ascii_lowercase + '_0123456789'

product=itertools.product(list(complete_charset), repeat=3)

for s in product:
  user = ''.join(s)
  try:
    api.GetUser(user)
    break
  except ValueError:
    print user + "is still available"
  count += 1
  print count + "of 50653"
