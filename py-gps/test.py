import gps, os, time

host="localhost"
debug=0
session = gps.gps(host=host, mode=gps.WATCH_ENABLE|gps.WATCH_JSON|gps.WATCH_SCALED, verbose=debug)

while 1:
    os.system('clear')
    # a = altitude, d = date/time, m=mode,
    # o=postion/fix, s=status, y=satellites

    print
    print ' GPS reading'
    print '----------------------------------------'
    print session
    #print 'eph         ' , session.fix.eph # Horizontal Accuracy
    #print 'epv         ' , session.fix.epv # Vertical Accuracy
    #print 'ept         ' , session.fix.ept # Total Accuracy
    #print 'climb       ' , session.fix.climb

    print
    print ' Satellites (total of', len(session.satellites) , ' in view)'
    for i in session.satellites:
        print '\t', i

    time.sleep(3)
