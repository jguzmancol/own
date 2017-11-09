#!/bin/bash
echo $1
echo $2
echo $1:$2 >> /etc/mosquitto/passwd
exec mosquitto_passwd -U /etc/mosquitto/passwd
