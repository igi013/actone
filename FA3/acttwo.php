<?php
$title = "Task 2 - Array Calculations";

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$sum = 0;
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

foreach ($numbers as $index => $value) {

    $sum += $value;
    
    $product *= $value;
    
    // For difference and quotient, skip the first element (already set as initial value)
    if ($index > 0) {
        // Difference: subtract all subsequent numbers from the first
        $difference -= $value;
        
        // Quotient: divide by all subsequent numbers
        $quotient /= $value;
    }
}

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 2</h2>
        <p> Array Mathematical Operations.</p>

        <table class="task2-table">
            <thead>
                <tr>
                    <th colspan="2">Array List: <?= implode(", ", $numbers) ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Addition</td>
                    <td><?= $sum ?></td>
                </tr>
                <tr>
                    <td>Subtraction</td>
                    <td><?= $difference ?></td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td><?= $product ?></td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td><?= $quotient ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

<?php
require('include/footer.php');
?>