import matplotlib
matplotlib.use('macosx')
import matplotlib.mlab as mlab
import matplotlib.pyplot as plt

r = mlab.csv2rec('one.csv')

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

plt.show()
