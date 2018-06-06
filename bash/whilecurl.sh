#!/bin/bash
count = 0
while :
do
	curl http://10.183.1.30/html/
	count=$((count+1))
	echo $count
done
