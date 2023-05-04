<!DOCTYPE html>
<html lang="">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="management.js"></script>
</head>
<body class="gradiant background">

<form action="login.php" method="post">
    <div style="text-align: center;"><a><img src="images/logo.png" width="150px" height="150px" alt=""></a>
        <h1>Galaboda Tea Factory</h1></div>


    <h2 id="login">Login</h2>
    <label for="username">Username:</label>
    <label>
        <input type="text" name="username" required>
    </label>
    <br>
    <label for="password">Password:</label>
    <label>
        <input type="password" name="password" required>
    </label>
    <br>
    <label for="user_type">User Type:</label>
    <label>
        <select name="user_type">
            <option value="management">Management</option>
            <option value="hr">HR Employee</option>
            <option value="employee">Employee</option>
        </select>
    </label>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>
