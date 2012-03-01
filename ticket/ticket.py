#!/usr/local/bin/python
import matplotlib
matplotlib.use('tkagg')
import matplotlib.mlab as mlab
import matplotlib.pyplot as plt
import matplotlib.dates as mdates
from pysqlite2 import dbapi2 as sqlite
import csv
import pprint
import datetime

connection = sqlite.connect('data/tickets.db')
cursor = connection.cursor()
cursor.execute('select * from tbltickets')

with open('data/tickets.csv', 'wb') as fout:
    writer = csv.writer(fout)
    writer.writerow([ i[0] for i in cursor.description ]) # heading row
    writer.writerows(cursor.fetchall())

r = mlab.csv2rec('data/tickets.csv')

fig = plt.figure()

ax = fig.add_subplot(111)

# Set the title.
ax.set_title("Time n' Date vs. Checksum",fontsize=14)

# Set the X Axis label.
ax.set_xlabel("24h time scale and date",fontsize=12)

# Set the Y Axis label.
ax.set_ylabel("Checksum",fontsize=12)

# Display Grid.
ax.grid(True,linestyle='-',color='0.75')

#ax.scatter(r.timesent,r.checksum,s=20,color='tomato');
ax.scatter(r.checksum,r.ticketcount,s=20,color='tomato');

plt.xticks(rotation=25)

fig.autofmt_xdate()

plt.show()
