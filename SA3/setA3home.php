<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION["username"]))
{
    header("Location: setA3.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">
        <h1>Home</h1>

        <div class="navigation">
            <ul>
                <li><a href="setA3logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">

        <div class="home-box">

            <h2>Welcome <?php echo $_SESSION["username"]; ?></h2>

            <p>You are now logged in using session.</p>

            <a href="setA3logout.php" class="back-btn">Logout</a>

        </div>

    </div>

</div>

</body>

</html>