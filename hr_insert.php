<?php
session_start();

// Check if the form was submitted
if (isset($_POST['submit'])) {

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "employeemanage");

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert a row into the users table
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = "hr";
    $sql = "INSERT INTO users (username, password, user_type) VALUES ('$username', '$password', '$user_type')";
    $result = $conn->query($sql);

    // Get the ID of the new user
    $user_id = $conn->insert_id;

    // Insert a row into the hr_employee table
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $national_id = $_POST['national_id'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO hr_employee (UserId, FirstName, LastName, NationalIdNumber, Birthday, Gender) VALUES ('$user_id', '$first_name', '$last_name', '$national_id', '$birthday', '$gender')";
    $result = $conn->query($sql);

    // Get the ID of the new employee
    $employee_id = $conn->insert_id;

    // Insert a row into the hr_employee_address table
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $sql = "INSERT INTO hr_employee_address (employee_id, street, city, state, postal_code) VALUES ('$employee_id', '$street', '$city', '$state', '$postal_code')";
    $result = $conn->query($sql);

    // Insert a row into the employee_contact table
    $contact_number_1 = $_POST['contact_number_1'];
    $contact_number_2 = $_POST['contact_number_2'];
    $relative_contact_1 = $_POST['relative_contact_1'];
    $relative_contact_2 = $_POST['relative_contact_2'];
    $sql = "INSERT INTO employee_contact (employee_id, contact_number_1, contact_number_2, relative_contact_1, relative_contact_2) VALUES ('$employee_id', '$contact_number_1', '$contact_number_2', '$relative_contact_1', '$relative_contact_2')";
    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();

    // Redirect to the management dashboard
    header("Location: management_dashboard.php");
    exit();
}
