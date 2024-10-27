<?php
// config.php

// Database configuration
$host = 'localhost'; // MySQL server (usually 'localhost')
$db = 'dormitory_management'; // Database name
$user = 'root'; // MySQL username
$pass = ''; // MySQL password

// Create a connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set the charset to avoid issues with special characters
mysqli_set_charset($conn, "utf8");

?>
