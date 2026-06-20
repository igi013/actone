<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Favorite Colors Result</h2>

    <div class="output-card">

        <div class="output-row">
            <span class="label">Color #1</span>
            <span class="value">
                <?php

                if(isset($_COOKIE["color1"]))
                {
                    echo $_COOKIE["color1"];
                }
                else
                {
                    echo "Expired";
                }
                ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Color #2</span>
            <span class="value">
                <?php

                if(isset($_COOKIE["color2"]))
                {
                    echo $_COOKIE["color2"];
                }
                else
                {
                    echo "Expired";
                }
                ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Color #3</span>
            <span class="value">
                <?php

                if(isset($_COOKIE["color3"]))
                {
                    echo $_COOKIE["color3"];
                }
                else
                {
                    echo "Expired";
                }
                ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Color #4</span>
            <span class="value">
                <?php

                if(isset($_COOKIE["color4"]))
                {
                    echo $_COOKIE["color4"];
                }
                else
                {
                    echo "Expired";
                }
                ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Color #5</span>
            <span class="value">
                <?php

                if(isset($_COOKIE["color5"]))
                {
                    echo $_COOKIE["color5"];
                }
                else
                {
                    echo "Expired";
                }
                ?>
            </span>
        </div>

    </div>

    <a href="threein.php" class="back-btn">Back</a>

</div>

</body>
</html>