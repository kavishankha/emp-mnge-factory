<?php
session_start();

// Check if the user is logged in and is a management user
if (!isset($_SESSION['username']) || $_SESSION['user_type'] != 'employee') {
    header("Location: login.php");
    exit();
}

// Display the management dashboard
echo "Welcome, " . $_SESSION['username'] . "! This is the employee dashboard.";
