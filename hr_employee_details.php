<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="hr_employee_details.css">
</head>
<body>
<form method="post" action="hr_insert.php">
    <div><h1>Add Employee</h1></div>
    <!-- User Information -->
    <div class="form-section">
        <label for="username">Username:</label>
        <label>
            <input type="text" name="username" required>
        </label>
    </div>
    <div class="form-section">
        <label for="password">Password:</label>
        <label>
            <input type="password" name="password" required>
        </label>
    </div>
    <!-- Employee Information -->
    <div class="form-section">
        <label for="first_name">First Name:</label>
        <label>
            <input type="text" name="first_name">
        </label>
    </div>
    <div class="form-section">
        <label for="last_name">Last Name:</label>
        <label>
            <input type="text" name="last_name">
        </label>
    </div>
    <div class="form-section">
        <label for="national_id">National ID Number:</label>
        <label>
            <input type="text" name="national_id">
        </label>
    </div>
    <div class="form-section">
        <label for="birthday">Birthday:</label>
        <label>
            <input type="date" name="birthday">
        </label>
    </div>
    <div class="form-section">
        <label for="gender">Gender:</label>
        <label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </label>
    </div>

    <!-- Employee Address -->
    <div class="form-section">
        <label for="street">Street:</label>
        <label>
            <input type="text" name="street">
        </label>
    </div>
    <div class="form-section">
        <label for="city">City:</label>
        <label>
            <input type="text" name="city">
        </label>
    </div>
    <div class="form-section">
        <label for="state">State:</label>
        <label>
            <input type="text" name="state">
        </label>
    </div>
    <div class="form-section">
        <label for="postal_code">Postal Code:</label>
        <label>
            <input type="text" name="postal_code">
        </label>
    </div>

    <!-- Employee Contact -->
    <div class="form-section">
        <label for="contact_number_1">Contact Number 1:</label>
        <label>
            <input type="text" name="contact_number_1">
        </label>
    </div>
    <div class="form-section">
        <label for="contact_number_2">Contact Number 2:</label>
        <label>
            <input type="text" name="contact_number_2">
        </label>
    </div>
    <div class="form-section">
        <label for="relative_contact_1">Relative Contact 1:</label>
        <label>
            <input type="text" name="relative_contact_1">
        </label>
    </div>
    <div class="form-section">
        <label for="relative_contact_2">Relative Contact 2:</label>
        <label>
            <input type="text" name="relative_contact_2">
        </label>
    </div>
    <div>
        <input type="submit" value="Add Employee">
    </div>
    <div>
        <input type=“cancel” value=“cancel”>
    </div>
</form>
</body>
</html>
