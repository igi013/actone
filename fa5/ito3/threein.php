<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_SESSION["color1"] = $_POST["color1"];
    $_SESSION["color2"] = $_POST["color2"];
    $_SESSION["color3"] = $_POST["color3"];
    $_SESSION["color4"] = $_POST["color4"];
    $_SESSION["color5"] = $_POST["color5"];

    setcookie("color1", $_POST["color1"], time() + 10);
    setcookie("color2", $_POST["color2"], time() + 15);
    setcookie("color3", $_POST["color3"], time() + 20);
    setcookie("color4", $_POST["color4"], time() + 25);
    setcookie("color5", $_POST["color5"], time() + 30);

    header("Location: threeout.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>My Favorite Colors</h2>

    <form method="post">

        <div class="form-grid">

            <div class="form-group">
                <label>Favorite Color #1</label>
                <input type="text" name="color1" required>
            </div>

            <div class="form-group">
                <label>Favorite Color #2</label>
                <input type="text" name="color2" required>
            </div>

            <div class="form-group">
                <label>Favorite Color #3</label>
                <input type="text" name="color3" required>
            </div>

            <div class="form-group">
                <label>Favorite Color #4</label>
                <input type="text" name="color4" required>
            </div>

            <div class="form-group full">
                <label>Favorite Color #5</label>
                <input type="text" name="color5" required>
            </div>

        </div>

        <input type="submit" value="Send Colors" class="btn">

    </form>

</div>

</body>
</html>