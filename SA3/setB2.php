<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_SESSION["user_id"]))
{
    header("Location: setB2home.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa3_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $userName = $_POST["username"];
    $userPassword = $_POST["password"];

    $sql = "SELECT * FROM user_information
    WHERE username = '$userName' AND password = '$userPassword'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["middle_name"] = $row["middle_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["birthday"] = $row["birthday"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["contact_number"] = $row["contact_number"];

        header("Location: setB2home.php");
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

    <title>Activity B Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">
        <h1>Activity B</h1>

        <div class="navigation">
            <ul>
                <li><a href="setB1.php">Registration</a></li>
                <li><a href="setB2.php">Login</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">

        <h2 class="login-title">Log-In Form</h2>

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

                <input type="submit" value="Login" class="btn">

            </div>

        </form>

    </div>

</div>

</body>

</html>