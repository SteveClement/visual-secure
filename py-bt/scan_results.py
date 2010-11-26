# Show scan results from last xy minutes
from pysqlite2 import dbapi2 as sqlite
import datetime, time

now = time.strftime("%Y-%m-%d %H:%M")

lg = len(now)

time_frame = 4 # 1 == 10 minutes , 2/3 == one hour, 4 

now_redux = now[0:lg-time_frame] + "%"

#query = 'SELECT addr, name, RSSI, bearing from locate_device where DateTime LIKE "' + now_redux + '" GROUP BY addr'
#query = 'SELECT addr, name, RSSI, bearing from locate_device where DateTime LIKE "' + now_redux + '" GROUP BY bearing'
#query = 'SELECT addr, name, RSSI from auto_device where DateTime LIKE "' + now_redux + '" GROUP BY addr'

query = 'SELECT addr, name, RSSI from auto_device where DateTime LIKE "' + now_redux + '" GROUP BY name'

connection = sqlite.connect('bt_fun.db')
cursor = connection.cursor()
cursor.execute(query)
result = cursor.fetchall()
connection.commit()
for i in result:
	print i[1]
