import os

# Shell commands used:
# 
# hcitool dev
# hcitool -i $device scan

device_list_command = 'hcitool dev'

device_list = os.system(device_list_command)

print device_list
