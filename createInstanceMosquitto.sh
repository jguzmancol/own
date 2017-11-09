#!/bin/bash
echo $1 # Get User
echo $2 # get Password
echo $3 # Get Device ID
mosquitto_sub -h "192.168.0.11" -t "$3" -u "$1" -P "$2" &
