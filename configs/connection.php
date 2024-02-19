<?php

$connect = [
	# Database Host Name
	'HOSTNAME' => 'localhost',

	# Database Username
	'USERNAME' => 'root',

	# Database Password
	'PASSWORD' => '',

	# Database Name
	'DATABASE' => 'at_brainstorm'
];

# Tables' Prefix
define('prefix', 'at_');

# No need to change anything bellow this line
$db = new mysqli($connect['HOSTNAME'], $connect['USERNAME'], $connect['PASSWORD'], $connect['DATABASE']);
if ($db->connect_errno) {
	echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
	exit;
}
