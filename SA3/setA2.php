<?php

session_start();

if(isset($_SESSION["username"]))
{
    header("Location: setA3home.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$savedUsername = "";
$savedPassword = "";
$message = "";
$isRemembered = false;

if(isset($_COOKIE["username"]))
{
    $savedUsername = $_COOKIE["username"];
    $isRemembered = true;
}

if(isset($_COOKIE["password"]))
{
    $savedPassword = $_COOKIE["password"];
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $savedUsername = $_POST["username"];
    $savedPassword = $_POST["password"];

    if(isset($_POST["remember"]))
    {
        setcookie("username", $savedUsername, time() + 86400);
        setcookie("password", $savedPassword, time() + 86400);

        $message = "Cookies saved successfully!";
        $isRemembered = true;
    }
    else
    {
        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);

        $savedUsername = "";
        $savedPassword = "";

        $message = "Cookies were not saved.";
        $isRemembered = false;
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Activity A No. 2 Login</title>

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
            echo "<div class='success-message'>$message</div>";
        }

        ?>

        <form method="post" action="">

            <div class="login-box">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $savedUsername; ?>" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $savedPassword; ?>" required>
                </div>

                <div class="remember-row">
                    <input type="checkbox" name="remember" id="remember" <?php if($isRemembered){ echo "checked"; } ?>>
                    <label for="remember">Remember Me</label>
                </div>

                <input type="submit" value="Submit" class="btn">

            </div>

        </form>

    </div>

</div>

</body>

</html>