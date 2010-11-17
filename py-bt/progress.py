#!/usr/bin/env python


import Tkinter

class Meter(Tkinter.Frame):
'''A simple progress bar widget.'''
def __init__(self, master, fillcolor='orchid1', text='',
value=0.0, **kw):
Tkinter.Frame.__init__(self, master, bg='white', width=350,
height=20)
self.configure(**kw)

self._c = Tkinter.Canvas(self, bg=self['bg'],
width=self['width'], height=self['height'], highlightthickness=0, relief='flat', bd=0)
self._c.pack(fill='x', expand=1)
self._r = self._c.create_rectangle(0, 0, 0,
int(self['height']), fill=fillcolor, width=0)
self._t = self._c.create_text(int(self['width'])/2,
int(self['height'])/2, text='')

self.set(value, text)

def set(self, value=0.0, text=None):
#make the value failsafe:
if value < 0.0:
value = 0.0
elif value > 1.0:
value = 1.0
if text == None:
#if no text is specified get the default percentage
string:
text = str(int(round(100 * value))) + ' %'
self._c.coords(self._r, 0, 0, int(self['width']) * value,
int(self['height']))
self._c.itemconfigure(self._t, text=text)