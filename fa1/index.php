<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?> - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
$name = "Inigo Austin M. Durana";
$title = "BSITWMA Student";
$contact = "iamdurana@gmail.com | 0945-123-4567 | Pasig City";

$education = [
    [
        "school" => "FEU Institute of Technology",
        "degree" => "Bachelor of Science in Information Technology with a specialization in Web and Mobile Application Development",
        "date" => "April 2026",
    ]
];

$experience = [
    [
        "role" => "Student",
        "company" => "FEU Institute of Technology",
        "details" => [  
            "1st Year: Completed foundational courses in programming, web development, and database management",
            "2nd Year: Developed a web application for a class project using HTML, CSS, and JavaScript",
        ]
    ],
    [
        "role" => "Intern",
        "company" => "Programmer",
        "details" => [
            "Google Summer of Code 2024: Contributed to an open-source project focused on improving web accessibility",
            "Netflix Internship 2024: Assisted in developing a feature for the Netflix web application using React and Node.js",
            "Microsoft Internship 2025: Worked on a team to create a mobile app prototype",
            "NAIA Internship 2025: Participated in a project to enhance the NAIA website's user experience and performance using PHP and MySQL",
        ]
    ]
];

$skills = ["Design", "Excel", "Team Leadership", "C++"];
$certifications = ["Java", "JavaScript", "Database", "Python"];
?>
    <header>
        <h1><?= $name ?></h1>
        <h3><?= $title ?></h3>
        <p><?= $contact ?></p>
    </header>

    <main>
        <section>
            <h2>Education</h2>
            <?php foreach ($education as $edu): ?>
                <p><strong><?= $edu["school"] ?></strong><br>
                <?= $edu["degree"] ?> <span class="date"><?= $edu["date"] ?></span></p>
            <?php endforeach; ?>

            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?= $skill ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Certifications</h2>
            <ul>
                <?php foreach ($certifications as $certification): ?>
                    <li><?= $certification ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Experience</h2>
            <?php foreach ($experience as $exp): ?>
                <p class="job-title"><?= $exp["role"] ?> — <?= $exp["company"] ?></p>
                <ul>
                    <?php foreach ($exp["details"] as $detail): ?>
                        <li><?= $detail ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
