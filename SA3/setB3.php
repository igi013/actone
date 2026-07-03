<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION["user_id"]))
{
    header("Location: setB2.php");
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
$isSuccess = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $reEnterPassword = $_POST["re_enter_password"];

    $userId = $_SESSION["user_id"];

    $sql = "SELECT * FROM user_information WHERE id = '$userId'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $oldPassword = $row["password"];

        if($currentPassword != $oldPassword)
        {
            $message = "Current password is not the same with the old password";
        }
        else if($newPassword != $reEnterPassword)
        {
            $message = "New password and Re-Enter new password should be the same.";
        }
        else
        {
            $updateSql = "UPDATE user_information 
            SET password = '$newPassword' 
            WHERE id = '$userId'";

            if(mysqli_query($conn, $updateSql))
            {
                $message = "Password reset successfully!";
                $isSuccess = true;
            }
            else
            {
                $message = "Error: " . mysqli_error($conn);
            }
        }
    }
    else
    {
        $message = "User record not found.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Reset Password</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">
        <h1>Activity B</h1>

        <div class="navigation">
            <ul>
                <li><a href="setB2home.php">Home</a></li>
                <li><a href="setB2logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">

        <h2 class="login-title">Reset Password</h2>

        <?php

        if($message != "")
        {
            if($isSuccess)
            {
                echo "<div class='success-message'>$message</div>";
            }
            else
            {
                echo "<div class='error-message'>$message</div>";
            }
        }

        ?>

        <form method="post" action="">

            <div class="login-box">

                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" name="current_password" required>
                </div>

                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="new_password" required>
                </div>

                <div class="form-group">
                    <label>Re-Enter New Password</label>
                    <input type="password" name="re_enter_password" required>
                </div>

                <br>

                <input type="submit" value="Reset Password" class="btn">

            </div>

        </form>

    </div>

</div>

</body>

</html>