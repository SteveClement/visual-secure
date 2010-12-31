all: edit-main edit-main_scan edit-main_connected

clean: 
	rm -f *.bak
	rm -f *_ui.py

commit:
	git commit -a

edit-test_bed:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project test_bed

edit-main_connected:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main_connected

edit-main_scan:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main_scan

edit-main:
	./guibuilder-linux-ix86-20070129 --directory . --language 'tkinter' --project main
