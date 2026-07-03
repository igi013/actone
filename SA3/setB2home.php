<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION["user_id"]))
{
    header("Location: setB2.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>User Information</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">
        <h1>User Information Form</h1>

        <div class="navigation">
            <ul>
                <li><a href="setB2logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">

        <div class="output-card">

            <h3>Welcome <?php echo $_SESSION["first_name"] . " " . $_SESSION["middle_name"] . " " . $_SESSION["last_name"]; ?></h3>

            <div class="output-row">
                <span class="label">Birthday</span>
                <span class="value"><?php echo $_SESSION["birthday"]; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Email</span>
                <span class="value"><?php echo $_SESSION["email"]; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Contact</span>
                <span class="value"><?php echo $_SESSION["contact_number"]; ?></span>
            </div>

            <br>

            <a href="setB3.php" class="back-btn">RESET PASSWORD</a>

        </div>

    </div>

</div>

</body>

</html>