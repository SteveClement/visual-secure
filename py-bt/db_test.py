from pysqlite2 import dbapi2 as sqlite

db = 'bt_fun.db'
db_con = sqlite.connect(db)
db_cursor = db_con.cursor()

def grab_unique():
    db_cursor.execute('SELECT addr FROM auto_device')
    results = db_cursor.fetchall()
    #dict().fromkeys(results).keys() 
    return results

print len(grab_unique())

