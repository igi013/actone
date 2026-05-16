<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    $firstName = "Inigo";
    $middleName = "Manzano";
    $lastName = "Durana";
    $studentId = "202410559";
    $course = "BS INFORMATION TECHNOLOGY";
    $yearLevel = "2nd Year";
    $gender = "Male";
    $contact = "09123456789";

    $previousSchool = "FEU TECH";
    $previousGrade = "1st Year College";
    $transferReason = "Better Opportunities";

?>

<div class="container">

    <h2>Personal Information</h2>

    <div class="output-card">

        <div class="output-row">
            <span class="label">First Name:</span>
            <span class="value">
                <?php echo ($firstName); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Middle Name:</span>
            <span class="value">
                <?php echo ($middleName); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Last Name:</span>
            <span class="value">
                <?php echo ($lastName); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Student ID:</span>
            <span class="value">
                <?php echo ($studentId); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Course:</span>
            <span class="value">
                <?php echo ($course); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Year Level:</span>
            <span class="value">
                <?php echo ($yearLevel); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Gender:</span>
            <span class="value">
                <?php echo ($gender); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Contact Number:</span>
            <span class="value">
                <?php echo ($contact); ?>
            </span>
        </div>

    </div>

    <h2 style="margin-top: 40px;">Educational Attainment</h2>

    <div class="output-card">

        <div class="output-row">
            <span class="label">Previous School:</span>
            <span class="value">
                <?php echo ($previousSchool); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Grade level in Previous School:</span>
            <span class="value">
                <?php echo ($previousGrade); ?>
            </span>
        </div>

        <div class="output-row">
            <span class="label">Reason of Transfer:</span>
            <span class="value">
                <?php echo ($transferReason); ?>
            </span>
        </div>

    </div>

    <div style="text-align:center;">
        <a href="homepage.php" class="back-btn">
            Back to Home
        </a>
    </div>

</div>

</body>
</html>