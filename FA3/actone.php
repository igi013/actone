<?php
$records = [
    ["name" => "Shoko Ieiri",     "image" => "https://i1-e.pinimg.com/webp85/736x/8d/73/24/8d7324ef8e650658e86b9020964e0df5.webp", "age" => 28, "birthday" => "November 7", "contact" => "0917-222-7777"],
    ["name" => "Suguru Geto",         "image" => "https://i1-e.pinimg.com/736x/43/76/75/4376758c74dc70b13bf78e1048606e06.jpg", "age" => 27, "birthday" => "February 3", "contact" => "0918-111-3333"],
    ["name" => "Yuta Okkotsu",       "image" => "https://i1-e.pinimg.com/webp85/736x/c7/a4/0f/c7a40fddcf81d544348c7d73a4995deb.webp", "age" => 17, "birthday" => "March 7", "contact" => "0919-333-4444"],
    ["name" => "Nobara Kugisaki",      "image" => "https://i1-e.pinimg.com/736x/f8/ed/be/f8edbeb52c9b8a386ef19c7918fc68f6.jpg", "age" => 16, "birthday" => "August 7", "contact" => "0920-555-5566"],
    ["name" => "Panda",        "image" => "https://i1-e.pinimg.com/736x/78/00/6d/78006d04834897ab556ae1137d2a40a4.jpg", "age" => 16, "birthday" => "March 5", "contact" => "0921-444-6677"],
    ["name" => "Megumi Fushiguro",        "image" => "https://i.pinimg.com/736x/02/6c/d1/026cd1a8dee1a783b0fcbf6c9b9ad95a.jpg", "age" => 15, "birthday" => "December 22", "contact" => "0922-888-7788"],
    ["name" => "Toge Inumaki",        "image" => "https://i1-e.pinimg.com/webp85/736x/8f/be/ed/8fbeedce22a19a6f363d4e05e8876172.webp", "age" => 17, "birthday" => "October 23", "contact" => "0923-777-9999"],
    ["name" => "Maki Zen'in",      "image" => "https://i1-e.pinimg.com/webp85/736x/c7/02/af/c702af99434ed98bb3220c560028ef00.webp", "age" => 16, "birthday" => "January 20 ", "contact" => "0924-888-9900"],
    ["name" => "Yuji Itadori",     "image" => "https://i1-e.pinimg.com/webp85/1200x/9a/ab/16/9aab166e66bd1ac8d46b65d9928ff0e9.webp", "age" => 16, "birthday" => "March 20, ", "contact" => "0925-111-1111"],
    ["name" => "Satoro Gojo", "image" => "https://i.pinimg.com/736x/8e/c6/2c/8ec62cd013e2f01dcfc98326643d925a.jpg", "age" => 28, "birthday" => "December 7", "contact" => "0926-222-1122"]
];

// Sort alphabetically by the 'name' key using usort()
usort($records, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 1</h2>
        <p>List of Jujustu sorcerers.</p>

        <table class="data-table">
            <thead>
                <tr>
                    <th>no.</th>
                    <th>name</th>
                    <th>Image</th>
                    <th>age</th>
                    <th>birthday</th>
                    <th>contact number</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $counter = 1;
                foreach ($records as $record): 
                ?>
                <tr>
                    <td><?= $counter ?></td>
                    <td><?= htmlspecialchars($record['name']) ?></td>
                    <td><img src="<?= htmlspecialchars($record['image']) ?>" alt="<?= htmlspecialchars($record['name']) ?>"></td>
                    <td><?= $record['age'] ?></td>
                    <td><?= $record['birthday'] ?></td>
                    <td><?= $record['contact'] ?></td>
                </tr>
                <?php 
                $counter++;
                endforeach; 
                ?>
            </tbody>
        </table>
    </section>
</main>

<?php
require('include/footer.php');
?>