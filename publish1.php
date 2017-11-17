<?php

$c = new Mosquitto\Client;
$c->onConnect(function() use ($c) {
	$c->publish('sami', 'Hello World', 2);
	$c->disconnect();
});

$c->connect('10.2.5.240');

$c->loopForever();

echo "Finished\n";
