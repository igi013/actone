<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doggos_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dog_information ORDER BY id";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Dog Information Records</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Dog Information Records</h2>

<?php

if(mysqli_num_rows($result) > 0)
{

    $count = 1;

    while($row = mysqli_fetch_assoc($result))
    {

?>

<div class="output-card">

<h3>Dog <?php echo $count; ?></h3>

<div class="output-row">
<span class="label">Name</span>
<span class="value"><?php echo $row["d_name"]; ?></span>
</div>

<div class="output-row">
<span class="label">Breed</span>
<span class="value"><?php echo $row["d_breed"]; ?></span>
</div>

<div class="output-row">
<span class="label">Age</span>
<span class="value"><?php echo $row["d_age"]; ?></span>
</div>

<div class="output-row">
<span class="label">Address</span>
<span class="value"><?php echo $row["d_add"]; ?></span>
</div>

<div class="output-row">
<span class="label">Color</span>
<span class="value"><?php echo $row["d_color"]; ?></span>
</div>

<div class="output-row">
<span class="label">Height</span>
<span class="value"><?php echo $row["d_height"]; ?></span>
</div>

<div class="output-row">
<span class="label">Weight</span>
<span class="value"><?php echo $row["d_weight"]; ?></span>
</div>

</div>

<?php

$count++;

    }

}
else
{
    echo "<div class='error-message'>No dog records found.</div>";
}

?>

<a href="one.php" class="back-btn">Back to Registration</a>

</div>

</body>

</html>