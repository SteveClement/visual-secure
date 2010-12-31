all: edit-main edit-main_scan edit-main_connected edit-guis_done_hard

clean: 
	rm -f *.bak
	rm -f *_ui.py

commit:
	git commit -a

edit-guis_done_hard:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project Guis_done_hard

edit-main_connected:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main_connected

edit-main_scan:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main_scan

edit-main:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main
