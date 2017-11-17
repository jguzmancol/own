#!/bin/bash
$1
$2
$3
$4
mosquitto_pub -t "$3" -m "$4" -u "$1" -P "$2"
