#!/usr/bin/env python

from Tkinter import *
from Guis_done_hard_ui import Guis_done_hard

# BEGIN USER CODE global

# END USER CODE global

class CustomGuis_done_hard(Guis_done_hard):
    pass

    # BEGIN CALLBACK CODE
    # ONLY EDIT CODE INSIDE THE def FUNCTIONS.

    # _button_1_command --
    #
    # Callback to handle _button_1 widget option -command
    def _button_1_command(self, *args):
        pass

    # _button_2_command --
    #
    # Callback to handle _button_2 widget option -command
    def _button_2_command(self, *args):
        pass

    # _button_3_command --
    #
    # Callback to handle _button_3 widget option -command
    def _button_3_command(self, *args):
        pass

    # _radiobutton_1_command --
    #
    # Callback to handle _radiobutton_1 widget option -command
    def _radiobutton_1_command(self, *args):
        pass

    # _radiobutton_2_command --
    #
    # Callback to handle _radiobutton_2 widget option -command
    def _radiobutton_2_command(self, *args):
        pass

    # END CALLBACK CODE

    # BEGIN USER CODE class

    # END USER CODE class

def main():
    # Standalone Code Initialization
    # DO NOT EDIT
    try: userinit()
    except NameError: pass
    root = Tk()
    demo = CustomGuis_done_hard(root)
    root.title('Guis_done_hard')
    try: run()
    except NameError: pass
    root.protocol('WM_DELETE_WINDOW', root.quit)
    root.mainloop()

if __name__ == '__main__': main()
