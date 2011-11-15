#!/usr/local/bin/python
#importing the required libraries
import matplotlib
matplotlib.use('tkagg')
#matplotlib.use('macosx')
#from matplotlib.backends.backend_agg import FigureCanvasAgg as FigureCanvas
#from matplotlib.figure import Figure
import matplotlib.mlab as mlab
import matplotlib.pyplot as plt

# Read data from a CSV file. Click here to download.
r = mlab.csv2rec('HealthExpenditure.csv')

# Create a figure with size 6 x 6 inches.
fig = plt.figure()

# Create a subplot.
ax = fig.add_subplot(111)

# Set the title.
ax.set_title("Health Expenditure Across The World",fontsize=14)

# Set the X Axis label.
ax.set_xlabel("Expenditure per person (US Dollars)",fontsize=12)

# Set the Y Axis label.
ax.set_ylabel("Average Life Expectancy at Birth (Years)",fontsize=12)

# Display Grid.
ax.grid(True,linestyle='-',color='0.75')

# Generate the Scatter Plot.
ax.scatter(r.expenditure,r.life_expectancy,s=20,color='tomato');

plt.show()
