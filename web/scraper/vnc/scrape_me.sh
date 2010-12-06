#!/bin/bash
COUNT=1
export DISPLAY=:11

while read URL
do
  /usr/bin/firefox -P WebGrass -display :11 ${URL}
  /bin/sleep 5
  /usr/bin/import -window root image-${COUNT}.jpg
  COUNT=$[${COUNT} + 1]
done < url_list.txt
