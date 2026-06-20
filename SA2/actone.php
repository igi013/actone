<?php

$fruits = array(
    array("name" => "Banana", "image" => "https://i.pinimg.com/736x/d0/a3/74/d0a3741535bb35765181b43f98ed89e8.jpg", "description" => "Color Yellow", "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."),
    array("name" => "Apple", "image" => "https://i.pinimg.com/webp85/736x/3f/a2/87/3fa287c717ff7a7102e6d872c68b5bda.webp", "description" => "Color Red", "facts" => "Apples are rich in fiber and vitamin C."),
    array("name" => "Grape", "image" => "https://i.pinimg.com/webp85/1200x/24/8d/d8/248dd846884751aed1dcecc51234f358.webp", "description" => "Color Purple", "facts" => "Grapes contain powerful antioxidant compounds."),
    array("name" => "Orange", "image" => "https://i.pinimg.com/736x/d3/ea/b8/d3eab85634aadd2321d1189dab3612ad.jpg", "description" => "Color Orange", "facts" => "Oranges are an excellent source of vitamin C."),
    array("name" => "Strawberry", "image" => "https://i.pinimg.com/736x/27/af/bf/27afbf7bb99413abf2ac551eff6e0e21.jpg", "description" => "Color Red", "facts" => "Strawberries are high in vitamin C and fiber."),
    array("name" => "Mango", "image" => "https://i.pinimg.com/webp85/736x/82/4b/6b/824b6b98774ccee5a7f2ba626141c1f4.webp", "description" => "Color Yellow", "facts" => "Mangoes are low in calories but high in nutrients."),
    array("name" => "Pineapple", "image" => "https://i.pinimg.com/webp85/736x/8b/f2/8e/8bf28e6b9a718175dd44a8e5103c1cae.webp", "description" => "Color Yellow", "facts" => "Pineapples contain bromelain, an enzyme that aids digestion."),
    array("name" => "Watermelon", "image" => "https://i.pinimg.com/736x/9d/d7/8d/9dd78d66ccc3cf73c9ebf6f703ce2517.jpg", "description" => "Color Red", "facts" => "Watermelon is 92% water, making it very hydrating."),
    array("name" => "Blueberry", "image" => "https://i.pinimg.com/webp85/736x/71/1a/c9/711ac927c461541d4c934fe4ca93357f.webp", "description" => "Color Blue", "facts" => "Blueberries are known as a superfood due to their high antioxidant content."),
    array("name" => "Cherry", "image" => "https://i.pinimg.com/webp85/1200x/06/c6/49/06c649e792167ba6f4fea83a6519df1b.webp", "description" => "Color Red", "facts" => "Cherries are rich in antioxidants and anti-inflammatory compounds.")
);

usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 1: Fruit Directory</h2>
        <p>A comprehensive guide to various fruits with their descriptions and nutritional facts.</p>

        <table class="fruit-table">
            <thead>
                <tr>
                    <th colspan="4">My Fruits</th>
                </tr>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fruits as $fruit): ?>
                <tr>
                    <td><img src="<?= htmlspecialchars($fruit['image']) ?>" alt="<?= htmlspecialchars($fruit['name']) ?>"></td>
                    <td><?= htmlspecialchars($fruit['name']) ?></td>
                    <td><?= htmlspecialchars($fruit['description']) ?></td>
                    <td><?= htmlspecialchars($fruit['facts']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php
require('include/footer.php');
?>