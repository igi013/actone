<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Rank Viewer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$name = "";
$grade = "";
$rank = "";
$image = "";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $grade = $_POST['grade'];

    // Rank System
    if($grade >= 93 && $grade <= 100){
        $rank = "A";
        $image = "images/img1.jpg";
    }
    elseif($grade >= 90){
        $rank = "A-";
        $image = "images/img1.jpg";
    }
    elseif($grade >= 87){
        $rank = "B+";
        $image = "images/img2.jpg";
    }
    elseif($grade >= 83){
        $rank = "B";
        $image = "images/img2.jpg";
    }
    elseif($grade >= 80){
        $rank = "B-";
        $image = "images/img2.jpg";
    }
    elseif($grade >= 77){
        $rank = "C+";
        $image = "images/img3.jpg";
    }
    elseif($grade >= 73){
        $rank = "C";
        $image = "images/img3.jpg";
    }
    elseif($grade >= 70){
        $rank = "C-";
        $image = "images/img3.jpg";
    }
    elseif($grade >= 67){
        $rank = "D+";
        $image = "images/img3.jpg";
    }
    elseif($grade >= 63){
        $rank = "D";
        $image = "images/img3.jpg";
    }
    elseif($grade >= 60){
        $rank = "D-";
        $image = "images/img3.jpg";
    }
    else{
        $rank = "F";
        $image = "images/img3.jpg";
    }
}
?>

<div class="container">

    <h2 class="sample-text">Sample Output</h2>

    <!-- FORM -->
    <form method="POST" class="form-box">

        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="number" name="grade" placeholder="Enter Grade" required>

        <button type="submit" name="submit">Submit</button>

    </form>

    <!-- OUTPUT BOX -->
    <div class="output-box">

        <div class="name-box">
            Name: <?php echo $name; ?>
        </div>

        <div class="bottom-section">

            <div class="small-box">
                <p>Rank:</p>
                <h1><?php echo $rank; ?></h1>
            </div>

            <div class="small-box">
                <p>Grade:</p>
                <h1><?php echo $grade; ?></h1>
            </div>

            <div class="image-box">

                <?php
                if($image != ""){
                    echo "<img src='$image' alt='Student Image'>";
                }
                else{
                    echo "Picture";
                }
                ?>

            </div>

        </div>

    </div>
    
    <br>

    <a href="homepage.php" class="back-btn">← Back to Homepage</a>

</div>


</body>
</html>