#!/bin/bash
echo $1 #USUARIO
echo $2 #PASSWORD
echo $3 #TOPIC
echo $4 #MENSAJE
mosquitto_pub -t $3 -m $4 -u $1 -P $2
