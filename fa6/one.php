<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doggos_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

$message = "";
$isSuccess = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $color = $_POST["color"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $sql = "INSERT INTO dog_information
    (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)

    VALUES

    ('$name','$breed','$age','$address','$color','$height','$weight')";

    if(mysqli_query($conn, $sql))
    {
        $message = "Dog information saved successfully!";
        $isSuccess = true;
    }
    else
    {
        $message = "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Dog Register</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Dog Information Registration</h2>

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
                <label>Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Breed</label>
                <input type="text" name="breed" required>
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" required>
            </div>

            <div class="form-group">
                <label>Color</label>
                <input type="text" name="color" required>
            </div>

            <div class="form-group">
                <label>Height</label>
                <input type="text" name="height" required>
            </div>

            <div class="form-group">
                <label>Weight</label>
                <input type="text" name="weight" required>
            </div>

            <div class="form-group full">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

        </div>

        <input type="submit" value="Save Dog" class="btn">

    </form>

    <a href="two.php" class="back-btn">View Dogs</a>

</div>

</body>

</html>