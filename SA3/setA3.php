<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_SESSION["username"]))
{
    header("Location: setA3home.php");
    exit();
}

$staticUsername = "user123";
$staticPassword = "12345";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == $staticUsername && $password == $staticPassword)
    {
        $_SESSION["username"] = $username;

        header("Location: setA3home.php");
        exit();
    }
    else
    {
        $message = "Invalid username or password.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Activity A No. 3 Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">
        <h1>Activity A</h1>

        <div class="navigation">
            <ul>
                <li><a href="setA1.php">Registration</a></li>
                <li><a href="setA2.php">Cookies</a></li>
                <li><a href="setA3.php">Session Login</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">

        <h2 class="login-title">Login Form</h2>

        <?php

        if($message != "")
        {
            echo "<div class='error-message'>$message</div>";
        }

        ?>

        <form method="post" action="">

            <div class="login-box">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <br>

                <input type="submit" value="Submit" class="btn">

            </div>

        </form>

    </div>

</div>

</body>

</html>