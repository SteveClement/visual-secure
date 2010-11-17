# -*- coding: utf-8 -*-
import bluetooth
import serial

#def SendViaBluetooth():

sockfd = bluetooth.BluetoothSocket(bluetooth.RFCOMM)
##sockfd.connect(('C8:97:9F:C9:B1:77', 1)) # BT Address
sockfd.connect(('00:25:48:71:67:7E', 1))
sockfd.send('AT+CBC\r')
##sockfd.send('AT+CMGF=1\r')
##sockfd.send('AT+CMGS=”+4478XXXXXXXX”\r') # TO PhoneNumber
##sockfd.send('SMS over Bluetooth\n')
sockfd.send(chr(26)) # CTRL+Z
sockfd.close()
