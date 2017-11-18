#!/bin/bash
echo $1 # Get User
echo $2 # get Password
echo $3 # Get Device ID
echo $1:$2 >> /etc/mosquitto/passwd
exec mosquitto_passwd -U /etc/mosquitto/passwd
exec mosquitto_sub -h "localhost" -t "$3" -u "$1" -P "$2" &
