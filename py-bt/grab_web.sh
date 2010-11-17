#!/bin/bash

# start a server with a specific DISPLAY
##vncserver :11 -geometry 1024x768

export DISPLAY=:11

# start firefox in this vnc session
##firefox --ProfileManger &

# read URLs from a data file in a loop
count=0
while [ true ]
##while read url
do
    # send URL to the firefox session
    url="http://lu.funtest.me/index2.php?a=${count}&s=subid&z=10c5c9cfe32df8a32144ac2b25d919d3"

    firefox $url

    # take a picture after waiting a bit for the load to finish
    sleep 2
    import -window root image-${count}.jpg
echo $count
    count=$[$count + 1]
#done < url_list.txt
done

# clean up when done
##vncserver -kill :11

