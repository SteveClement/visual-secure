#!/usr/bin/env python

from Tkinter import *

class bt_fun:
    def __init__(self, parent):
        self.myParent = parent
        self.myContainer1 = Frame(parent)
        self.myContainer1.pack()

        self.button1 = Button(self.myContainer1)
        self.button1.configure(text="Scan", background= "green")
        self.button1.pack(side=LEFT)
        self.button1.focus_force()         ### (0)
        self.button1.bind("<Button-1>", self.button1Click)
        self.button1.bind("<Return>", self.button1Click)  ### (1)

        self.button2 = Button(self.myContainer1)
        self.button2.configure(text="Payload", background= "green")
        self.button2.pack(side=LEFT)
        self.button2.bind("<Button-1>", self.button2Click)
        self.button2.bind("<Return>", self.button2Click)  ### (1)

        self.button3 = Button(self.myContainer1)
        self.button3.configure(text="Camera", background= "green")
        self.button3.pack(side=LEFT)
        self.button3.bind("<Button-1>", self.button3Click)
        self.button3.bind("<Return>", self.button3Click)  ### (1)

        self.button4 = Button(self.myContainer1)
        self.button4.configure(text="Clean-up", background= "green")
        self.button4.pack(side=LEFT)
        self.button4.bind("<Button-1>", self.button4Click)
        self.button4.bind("<Return>", self.button4Click)  ### (1)

        self.button9 = Button(self.myContainer1)
        self.button9.configure(text="Exit", background="red")
        self.button9.pack(side=RIGHT)
        self.button9.bind("<Button-1>", self.button9Click)
        self.button9.bind("<Return>", self.button9Click)  ### (2)

    def button1Click(self, event):
        report_event(event)        ### (3)
        if self.button1["background"] == "green":
            self.button1["background"] = "yellow"
            self.button1["text"] = "yellow"
        else:
            self.button1["background"] = "green"
            self.button1["text"] = "green"

    def button2Click(self, event):
        report_event(event)   ### (4)
        self.myParent.destroy()

    def button3Click(self, event):
        report_event(event)   ### (4)
        self.myParent.destroy()

    def button4Click(self, event):
        report_event(event)   ### (4)
        self.myParent.destroy()

    def button9Click(self, event):
        report_event(event)   ### (4)
        self.myParent.destroy()


def report_event(event):     ### (5)
    """Print a description of an event, based on its attributes.
    """
    event_name = {"2": "KeyPress", "4": "ButtonPress"}
    print "Time:", str(event.time)   ### (6)
    print "EventType=" + str(event.type), \
        event_name[str(event.type)],\
        "EventWidgetId=" + str(event.widget), \
        "EventKeySymbol=" + str(event.keysym)

root = Tk()
bt_fun = bt_fun(root)
root.mainloop()