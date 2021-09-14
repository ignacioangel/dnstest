#!/bin/bash
#
#
#

SERVERLIST=serverlist.txt

while read server
do
	echo "$server"
	dig +noall +answer -x $server @$server
	dig +noall +answer +stats $1 @$server

done < $SERVERLIST
