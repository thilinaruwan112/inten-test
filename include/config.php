<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "intern-test";
$database_error = "";

/* Attempt to connect to MySQL database */
$link = mysqli_connect($server, $username, $password, $database);

// Check connection

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    $database_error = "Connected to the Server";
}
