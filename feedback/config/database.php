<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_dev');

// Create our connection
$conn = new mysqli(
    DB_HOST, DB_USER, DB_PASS, DB_NAME
);

// Check the connection
if ($conn->connect_error) {
    die('Connection error: ' . $conn->connect_error);
}

// Connection established

?>