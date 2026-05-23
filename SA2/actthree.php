<?php
require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Student Resume</h2>
        <p>Professional resume with complete information</p>

        <div class="resume-container">
            <!-- Top Section: Photo and Personal Info -->
            <div class="resume-header">
                <div class="resume-photo">
                    <img src="Screenshot 2026-05-05 014049.png" alt="Profile Photo">
                </div>
                <div class="resume-personal-info">
                    <?php include('include/personal.php'); ?>
                </div>
            </div>

            <!-- Career Objective -->
            <div class="resume-section">
                <?php include('include/career.php'); ?>
            </div>

            <!-- Educational Attainment -->
            <div class="resume-section">
                <?php include('include/education.php'); ?>
            </div>

            <!-- Skills -->
            <div class="resume-section">
                <?php include('include/skills.php'); ?>
            </div>

            <!-- Affiliation -->
            <div class="resume-section">
                <?php include('include/affiliation.php'); ?>
            </div>

            <!-- Work Experience -->
            <div class="resume-section">
                <?php include('include/work.php'); ?>
            </div>
        </div>
    </section>
</main>

<?php
require('include/footer.php');
?>