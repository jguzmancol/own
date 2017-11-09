#!/bin/bash
echo $1 # Get User
echo $2 # Get Password
echo $3 # Get Device ID
echo $1:$2 >> /etc/mosquitto/passwd
exec mosquitto_passwd -U /etc/mosquitto/passwd
