<?php
session_start();
include('db_connection.php');

// Get the user input from the login form
$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Check if the user exists in the database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type='$user_type'";
$result = mysqli_query($conn, $query);

// If the user exists, set the session variable and redirect to the appropriate dashboard
if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['user_type'] = $user_type;
    if ($user_type == 'management') {
        header("Location: management_dashboard.php");
    } elseif ($user_type == 'hr') {
        header("Location: hr_employee_dashboard.php");
    } elseif ($user_type == 'employee') {
        header("Location: employee_dashboard.php");
    }
} else {
    echo "Invalid login credentials";
}
