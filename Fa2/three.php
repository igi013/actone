<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Digit Combination</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1 class="title">Two Digit Decimal Combination</h1>

    <!-- SINGLE CARD / BOX -->
    <div class="output-box number-box">

        <?php

        for($x = 0; $x <= 99; $x++){

            if($x < 10){
                echo "0$x";
            }

            else{
                echo "$x";
            }

            // Adds comma except after 99
            if($x != 99){
                echo ", ";
            }

        }

        ?>

    </div>

    <a href="homepage.php" class="back-btn">← Back to Homepage</a>

</div>

</body>
</html>