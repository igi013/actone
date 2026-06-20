<!DOCTYPE html>
<html>
<head>
    <title>Personal Information - GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Personal Information Form (GET)</h2>

    <form method="get" action="">

        <div class="form-grid">

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname">
            </div>

            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middlename">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname">
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="birthdate">
            </div>

            <div class="form-group full">
                <label>Address</label>
                <input type="text" name="address">
            </div>

        </div>

        <input type="submit" value="Submit" class="btn">

    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname']))
    {
    ?>

    <br>

    <h3>Submitted Information</h3>

    <div class="output-card">

        <div class="output-row">
            <span class="label">First Name</span>
            <span class="value"><?php echo $_GET['firstname']; ?></span>
        </div>

        <div class="output-row">
            <span class="label">Middle Name</span>
            <span class="value"><?php echo $_GET['middlename']; ?></span>
        </div>

        <div class="output-row">
            <span class="label">Last Name</span>
            <span class="value"><?php echo $_GET['lastname']; ?></span>
        </div>

        <div class="output-row">
            <span class="label">Date of Birth</span>
            <span class="value"><?php echo $_GET['birthdate']; ?></span>
        </div>

        <div class="output-row">
            <span class="label">Address</span>
            <span class="value"><?php echo $_GET['address']; ?></span>
        </div>

    </div>

    <?php
    }
    ?>

</div>

</body>
</html>