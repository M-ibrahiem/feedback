<?php 
define('DB_HOST','localhost');
define('DB_USER','feedback');
define('DB_PASS','feedback');
define('DB_NAME','feedback');

// Create connection 
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// check connection

if ($conn->connect_error) {
    die('Connection Failed '. $conn->connect_error);
}

// echo 'connected';