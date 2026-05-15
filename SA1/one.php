<?php
// Initialize variables
$firstName = $middleName = $lastName = $studentId = "";
$course = $yearLevel = $gender = $contact = "";
$isSubmitted = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Sanitize & Trim Inputs (Lab Requirement VI.1.a)
    $firstName = trim($_POST['first_name']);
    $middleName = trim($_POST['middle_name']);
    $lastName  = trim($_POST['last_name']);
    $studentId = trim($_POST['student_id']);
    $course    = trim($_POST['course']);
    $yearLevel = trim($_POST['year_level']);
    $gender    = trim($_POST['gender']);
    $contact   = trim($_POST['contact']);

    // 2. Apply String Formatting (Lab Requirement VI.1.b)
    $firstName = ucwords(strtolower($firstName));
    $middleName = $middleName !== '' ? ucwords(strtolower($middleName)) : 'N/A';
    $lastName  = strtoupper($lastName);
    $course    = strtoupper($course);
    $gender    = ucfirst(strtolower($gender));

    $isSubmitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if (!$isSubmitted): ?>
            <!-- ================= FORM SECTION ================= -->
            <h2>Student Registration Form</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="student_id">Student ID:</label>
                        <input type="text" id="student_id" name="student_id" required>
                    </div>
                    <div class="form-group full">
                        <label for="course">Course / Program:</label>
                        <input type="text" id="course" name="course" required>
                    </div>
                    <div class="form-group">
                        <label for="year_level">Year Level:</label>
                        <select id="year_level" name="year_level" required>
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group full">
                        <label for="contact">Contact Number:</label>
                        <input type="text" id="contact" name="contact" placeholder="e.g., 09123456789" required>
                    </div>
                </div>
                <button type="submit" class="btn">Register Student</button>
            </form>

            <div>
                <a href="homepage.php" class="back-btn">Back to Home</a>
            </div>

        <?php else: ?>
            <!-- ================= OUTPUT SECTION ================= -->
            <h2>Registration Successful</h2>
            <div class="output-card">
                <h3>Student Information</h3>
                <div class="output-row"><span class="label">First Name:</span> <span class="value"><?php echo htmlspecialchars($firstName); ?></span></div>
                <div class="output-row"><span class="label">Middle Name:</span> <span class="value"><?php echo htmlspecialchars($middleName); ?></span></div>
                <div class="output-row"><span class="label">Last Name:</span> <span class="value"><?php echo htmlspecialchars($lastName); ?></span></div>
                <div class="output-row"><span class="label">Student ID:</span> <span class="value"><?php echo htmlspecialchars($studentId); ?></span></div>
                <div class="output-row"><span class="label">Course:</span> <span class="value"><?php echo htmlspecialchars($course); ?></span></div>
                <div class="output-row"><span class="label">Year Level:</span> <span class="value"><?php echo htmlspecialchars($yearLevel); ?></span></div>
                <div class="output-row"><span class="label">Gender:</span> <span class="value"><?php echo htmlspecialchars($gender); ?></span></div>
                <div class="output-row"><span class="label">Contact Number:</span> <span class="value"><?php echo htmlspecialchars($contact); ?></span></div>
            </div>
            <!-- Updated Buttons -->
            <div style="display: flex; gap: 10px; justify-content: center; margin-top: 20px; flex-wrap: wrap;">
                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="back-btn">🔄 Register Another</a>
                <a href="homepage.php" class="back-btn">🏠 Back to Home</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>