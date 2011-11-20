<?php
use lithium\data\Connections;

Connections::add('default', array(
	'type' => 'MongoDb',
	'host' => 'localhost',
	'database' => 'noteslide'
));

?>