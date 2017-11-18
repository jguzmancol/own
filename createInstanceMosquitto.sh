#!/bin/bash
echo $1 # Get User
echo $2 # get Password
echo $3 # Get Device ID
echo $1:$2 >> /etc/mosquitto/passwd
exec mosquitto_passwd -U /etc/mosquitto/passwd
<<<<<<< HEAD
exec mosquitto_sub -h "localhost" -t "$3" -u "$1" -P "$2" &
=======
exec mosquitto_sub -h "10.2.5.240" -t "$3" -u "$1" -P "$2" &
>>>>>>> 154326970ee5ee9eba0e7db85c6de9142ade8c6c
