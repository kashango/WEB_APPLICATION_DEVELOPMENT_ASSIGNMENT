<?php

$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'bookstore';

// Establish a database connection
$conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

if (!$conn) {
	echo "Connection failed!";
}