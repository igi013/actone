<?php

session_start();

if(isset($_SESSION["user_id"]))
{
    header("Location: setB2home.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contact_number"];

    if($password != $confirmPassword)
    {
        $message = "password and confirm password are not the same";
    }
    else
    {
        $sql = "INSERT INTO user_information
        (first_name, middle_name, last_name, username, password, birthday, email, contact_number)

        VALUES

        ('$firstName','$middleName','$lastName','$userName','$password','$birthday','$email','$contactNumber')";

        if(mysqli_query($conn, $sql))
        {
            $message = "User information saved successfully!";
            $isSuccess = true;
        }
        else
        {
            $message = "Error: " . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Activity B No. 1 Registration</title>

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

        <h2>My Personal Information</h2>

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

            <div class="form-grid">

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" required>
                </div>

                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" required>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" required>
                </div>

                <div class="form-group">
                    <label>Birthday</label>
                    <input type="text" name="birthday" placeholder="Example: January 30 1993" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group full">
                    <label>Contact Number</label>
                    <input type="text" name="contact_number" required>
                </div>

            </div>

            <div class="button-row">
                <input type="submit" value="Save Information" class="btn">
                
                <a href="setB2.php" class="back-btn">Go to Login Form</a>
            </div>

        </form>

    </div>

</div>

</body>

</html>