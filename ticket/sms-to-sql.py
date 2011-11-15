#!/usr/bin/env python
from pysqlite2 import dbapi2 as sqlite
import string
import pprint

SMSdb = 'data/sms.db'
ticketdb = 'data/tickets.db'

db_con = sqlite.connect(SMSdb)
db_cursor = db_con.cursor()

dbt_con = sqlite.connect(ticketdb)
dbt_cursor = dbt_con.cursor()

def grab_tickets():
    db_cursor.execute("select text from message where address='64222' and not text='A' and not text=' A' and not text='A a' and not text like 'Code%' and not text like 'Could%' and not text like 'Service%'")
    db_con.commit()
    #results = db_cursor.fetchall()
    #dict().fromkeys(results).keys()
    for row in db_cursor:
        #print row.split(' ')
        x = row[0].split('\n')
        #pprint.pprint(x)
        checksum = x[0].split('A')[0]
        ticketcount = x[0].split('A')[1]
        expiredate = x[2].split(' ')[0]
        expiretime = x[2].split(' ')[1]
        timesent = x[6].split(' ')[1]
        query = u'INSERT INTO tbltickets VALUES ("%s", "%s", "%s", "%s","%s")' % (checksum, ticketcount, expiredate, expiretime, timesent)
        dbt_cursor.execute(query)
        dbt_con.commit()
    db_con.close()
    dbt_con.close()
    #return results

#print len(grab_tickets())
print grab_tickets()
