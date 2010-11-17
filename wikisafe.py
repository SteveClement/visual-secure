#!/usr/bin/env python

#########################################################
#							#
# WikiSafe.py						#
# MediaWiki user hash dictionary attack (MD5 Hashes)	#
# Published under a GPLv3 Licence			#
# Copyleft 2010 kwisatz@c3l.lu				#
# Version 0.2.2						#
#							#
# The author is not responsible for illicit use!	#
#							#
#########################################################

from hashlib import md5
import sys, os, re
import pickle, string, random
import time

# define Session class
class Session():
	
	def __init__(self,name):
		self.name = name
		self.found = []
		self.file = '.wikisafe.' + name + '.ws'
		print "Saving session to file %s\n" % self.file
		
	def store(self,**keywords):
		keys = keywords.keys()
		for key in keys:
			self.__dict__[key] = keywords[key]
		#self.wfilename = wfilename
		#self.users = users
		#self.linenumber = state
		return(1)
		
	def update(self,**keywords):
		keys = keywords.keys()
		for key in keys:
			if self.__dict__[key] is None:
				self.__dict__[key] = []
			self.__dict__[key].append(keywords[key])
	
	def save(self):
		pickle.dump(self,open(self.file,'w'))
		return(1)
		
	def restore(self):
		return pickle.load(open(self.file,'r'))
	

def compareHash(word):
	""" Calculating the hashes from the passed argument."""
	for row in ulist:
		match = re.match(r"(.*)\t:B:(.*):(.*)", row)
		time.sleep(1)
		if match != None:
			user = match.group(1)
			if user not in session.found:	# don't check a user if we already found the password
				hash = md5(match.group(2) + "-" + md5(word).hexdigest() ).hexdigest()
				print "Checking user %s, word %s, hash: %s" % (user,word,hash) # enable on debug
				if hash == match.group(3):
					print "\nWe have a match: %s's password is weak!" % user
					session.update(found=user)
					results.write(user + ' has a weak password\n') # enable only on debug?
					results.flush()
	return
	
	
# Deflection methods
def plain(word):
	compareHash(word)
	return
	
def capitalize(word):
	for i in range(len(word)):
		if word[i].isalpha():
			newWord = word[:i+1].upper() + word[i+1:]
			compareHash(newWord)
	return

def leetspeak(word):
	for i in range(len(word)):
		char = str(leets[word[i]]) if word[i] in leets else word[i]
		word = word[:i] + char + word[i+1:]
		compareHash(word)
	return
	
# main function
def crackIt(words,users,offset):
	""" Main loop """
	operations = (plain,capitalize,leetspeak)
	# http://effbot.org/zone/readline-performance.htm
	wsize = len(words)
	usize = len(users)
	modifier = 1	# determine modifier from screen length?
	onehash = ( wsize / 100 ) * modifier
	hashes = 0
	print "Running %d words over %d users, starting at %d..." % (wsize,usize,offset)
	for line in range(offset,wsize):
		try:
			status = int(line / onehash)
			if status > hashes:
				hashes = status
				msg = str(status) +'% ' 
				sys.stdout.write('\x08'*(hashes+1+len(msg)))	# remove previous line
				sys.stdout.write(msg + '='*hashes + '>')
				sys.stdout.flush()
			word = words[line].rstrip()
			for operation in operations:
				operation(word)
		except KeyboardInterrupt:
			if session.store(wfilename=wfilename,users=users,linenumber=line) and session.save():
				print "\nSaved session successfully, exiting\n"
				exit(0)			
	results.close()
	print '\nDone\n'

# Print warning message
print '#################################################################################################'
print '# WARNING: Use this tool only on database dumps of users you have the explicit permission from! #'
print '#################################################################################################'

# check cli arguments (wordfile, hashes, restore)
if len(sys.argv) < 3:
	print '\nUsage:' + sys.argv[0] + ' [--wordlist=file] [--save=name] [--restore=name] hashes\n'
	exit(0)
	
# interpret arguments
restored = False		# assume no restore
namedSession = False	# assume no name
instantiatedSession = False

for arg in sys.argv[1:]:
	if arg[:2] == '--':	#we have a cli
		set = arg.split('=')
		if set[0] == '--wordlist':
			wfilename = set[1]
		elif set[0] == '--restore':
			sessionName = set[1]
			session = Session(sessionName)	# using the old session name for the new save
			instantiatedSession = True
			namedSession = True
			recSession = session.restore()
			if recSession:
				wfilename = recSession.wfilename
				ulist = recSession.users
				line = recSession.linenumber
				restored = True
		elif set[0] == '--save':
			sessionName = set[1]
			namedSession = True

# Add CHECK whether there is a wordlist!
whandle = open(wfilename, 'r')
wlist = whandle.readlines()

# instantiate a session and save in any case (because restored sessions save to the original pickle):
if not namedSession and not restored:
	d = [random.choice(string.letters) for x in range(10)]
	sessionName = ''.join(d)
	
if not instantiatedSession:
	session = Session(sessionName)
	
if not restored:
	uhandle = open(sys.argv[len(sys.argv)-1],'r')	#last argument must be the hashes
	ulist = uhandle.readlines()
	line = 0

results = open('results.txt','a')
leets = {'l':1, 'e':3, 'a':4, 's':5, 't':7, 'o':0, 'b':8}
found = []

# Let's go!
crackIt(wlist,ulist,line)
