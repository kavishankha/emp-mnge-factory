<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeemanage";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

