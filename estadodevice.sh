#!/bin/bash
$1 #USUARIO
$2 #PASSWORD
$3 #TOPIC
$4 #MENSAJE
mosquitto_pub -t $3 -m $4 -u $1 -P $2
