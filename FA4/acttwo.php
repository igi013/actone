<?php
$title = "Task 2 - String Functions";

// Array with 20 different names
$names = array(
    "Kim Dokja",
    "Yoo Joonghyuk",
    "Han Sooyoung",
    "Lee Hyunsung",
    "Jung Heewon",
    "Shin Yoosung",
    "Yoo Sangah",
    "Lee Jihye",
    "Han Myungoh",
    "Gong Pildu",
    "Bihyung",
    "Uriel",
    "Secretive Plotter",
    "Metatron",
    "Abyssal Black Flame Dragon",
    "Oldest Dream",
    "Abyssal Dragon Lord",
    "Kang Hyeonsung",
    "Lee Sookyung",
    "Kim Namwoon"
);

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 2</h2>
        <p>List of names</p>

        <table class="string-table">
            <thead>
                <tr>
                    <th colspan="6">List of names</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Number of characters</th>
                    <th>Uppercase first character</th>
                    <th>Replace vowels with @</th>
                    <th>Check position of character "a"</th>
                    <th>Reverse name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($names as $name): 
                    $charCount = strlen($name);
                    $upperFirst = ucfirst($name);
                    $replaceVowels = str_replace(array('a','e','i','o','u','A','E','I','O','U'), '@', $name);
                    $positionA = strpos($name, 'a');
                    $reverseName = strrev($name);
                ?>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $charCount ?></td>
                    <td><?= $upperFirst ?></td>
                    <td><?= $replaceVowels ?></td>
                    <td><?= $positionA !== false ? $positionA + 1 : 'Not found' ?></td>
                    <td><?= $reverseName ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php
require('include/footer.php');
?>