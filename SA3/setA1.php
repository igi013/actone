<?php

session_start();

if(isset($_SESSION["username"]))
{
    header("Location: setA3home.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = "";
$isSuccess = false;
$showResult = false;

$firstName = "";
$middleName = "";
$lastName = "";
$userName = "";
$password = "";
$confirmPassword = "";
$birthday = "";
$email = "";
$contactNumber = "";

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
        $message = "Registration submitted successfully!";
        $isSuccess = true;
        $showResult = true;
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Activity A No. 1 Registration</title>

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
                    <input type="text" name="first_name" value="<?php echo $firstName; ?>" required>
                </div>

                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" value="<?php echo $middleName; ?>" required>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" value="<?php echo $lastName; ?>" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $userName; ?>" required>
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
                    <input type="text" name="birthday" value="<?php echo $birthday; ?>" placeholder="Example: January 30 1993" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" required>
                </div>

                <div class="form-group full">
                    <label>Contact Number</label>
                    <input type="text" name="contact_number" value="<?php echo $contactNumber; ?>" required>
                </div>

            </div>

            <input type="submit" value="Submit" class="btn">

        </form>

        <?php

        if($showResult)
        {

        ?>

        <div class="output-card">

            <h3>Registration Result</h3>

            <div class="output-row">
                <span class="label">Full Name</span>
                <span class="value"><?php echo $firstName . " " . $middleName . " " . $lastName; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Username</span>
                <span class="value"><?php echo $userName; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Password</span>
                <span class="value"><?php echo $password; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Birthday</span>
                <span class="value"><?php echo $birthday; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Email</span>
                <span class="value"><?php echo $email; ?></span>
            </div>

            <div class="output-row">
                <span class="label">Contact Number</span>
                <span class="value"><?php echo $contactNumber; ?></span>
            </div>

        </div>

        <?php

        }

        ?>

    </div>

</div>

</body>

</html>