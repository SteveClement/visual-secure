#!/usr/local/bin/python
import matplotlib
matplotlib.use('tkagg')
import matplotlib.mlab as mlab
import matplotlib.pyplot as plt
from pysqlite2 import dbapi2 as sqlite
import csv
import pprint

connection = sqlite.connect('tickets.db')
cursor = connection.cursor()
cursor.execute('select * from tbltickets')

with open('tickets.csv', 'wb') as fout:
    writer = csv.writer(fout)
    pprint.pprint(cursor.description)
    writer.writerow([ i[0] for i in cursor.description ]) # heading row
    t = cursor.fetchall()
    pprint.pprint(t)
    writer.writerows(t)

r = mlab.csv2rec('tickets.csv')

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

ax.scatter(r.timesent,r.checksum,s=20,color='tomato');

plt.xticks(rotation=25)

plt.show()
