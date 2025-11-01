<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "dbretail";
$port = 3306;

$mysqli = new mysqli($host, $user, $pass, $db, $port);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    // echo "Connected to database successfully";
}
?>
