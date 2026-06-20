<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    setcookie("firstname", $_POST["firstname"], time() + 10);
    setcookie("middlename", $_POST["middlename"], time() + 20);
    setcookie("lastname", $_POST["lastname"], time() + 30);

    header("Refresh:0");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Activity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Personal Information Cookies</h2>

    <form method="post">

        <div class="form-grid">

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middlename" required>
            </div>

            <div class="form-group full">
                <label>Last Name</label>
                <input type="text" name="lastname" required>
            </div>

        </div>

        <input type="submit" value="Save Cookies" class="btn">

    </form>

    <br>

    <h3>Cookie Values</h3>

    <div class="output-card">

        <div class="output-row">
            <span class="label">First Name</span>
            <span class="value">

                <?php
                if(isset($_COOKIE["firstname"]))
                {
                    echo $_COOKIE["firstname"];
                }
                else
                {
                    echo "Cookie Expired";
                }
                ?>

            </span>
        </div>

        <div class="output-row">
            <span class="label">Middle Name</span>
            <span class="value">

                <?php
                if(isset($_COOKIE["middlename"]))
                {
                    echo $_COOKIE["middlename"];
                }
                else
                {
                    echo "Cookie Expired";
                }
                ?>

            </span>
        </div>

        <div class="output-row">
            <span class="label">Last Name</span>
            <span class="value">

                <?php
                if(isset($_COOKIE["lastname"]))
                {
                    echo $_COOKIE["lastname"];
                }
                else
                {
                    echo "Cookie Expired";
                }
                ?>

            </span>
        </div>

    </div>

</div>

</body>
</html>