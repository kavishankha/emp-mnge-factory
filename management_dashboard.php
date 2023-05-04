<html lang="">
<head>
    <title></title>
    <link rel="stylesheet" href="managementStyle.css">

</head>
<body>
<div class="header">
    <nav>
        <ul class="navigationbar">
            <li class="name2">
                <div> <?php
                    session_start();

                    // Check if the user is logged in and is a management user
                    if (!isset($_SESSION['username']) || $_SESSION['user_type'] != 'management') {
                        header("Location: login.php");
                        exit();
                    }

                    // Display the management dashboard
                    echo "<p class='headerName'>Welcome, <span class='userName'>" . $_SESSION['username'] . "</span>! This is the management dashboard.</p>";
                    ?>
                </div>
            </li>

            <li class="list1">
                <button class="btn1"> Log out
                </button>
            </li>
        </ul>
    </nav>
</div>
<br/>
<br/>
<br/>

<div class="button-panel">
    <table>
        <tr>
            <td>
                <form action="hr_employee_details.php" method="post">
                    <button class="btn">
                        <div class="heder2">ADD HR Employee</div>
                        <br>
                        <br>
                        <a><img src="images/emp1.png" width="150px" height="150px" alt=""></a>
                    </button>
                </form>
            </td>
            <td>
                <button class="btn">
                    <div class="heder2">View HR Employee Details</div>
                    <br>
                    <br>
                    <a><img src="images/emp2.png" width="150px" height="150px" alt=""></a>
                </button>
            </td>
            <td>
                <button class="btn">
                    <div class="heder2">View Employee Details</div>
                    <br>
                    <br>
                    <a><img src="images/emp3.png" width="150px" height="150px" alt=""></a>
                </button>
            </td>
            <td>
                <button class="btn">
                    <div class="heder2">View Today Employee Attendance</div>
                    <br>
                    <br>
                    <a><img src="images/emp5.png" width="150px" height="150px" alt=""></a>
                </button>
            </td>

        </tr>
    </table>
</div>
<div class="footer1">
    <table>
        <tr>
            <td>
                <div class="footer">
                    <p id="date"></p>

                </div>
            </td>
            <td>
                <div class="footer3">
                    <div class="imagelogo"><img src="images/logo.png" width="100px" height="100px" alt=""></div>

                </div>
            </td>
        </tr>
    </table>
</div>
<script src="management.js"></script>

</body>


</html>
