<?php
// User-defined function that performs calculations on 3 parameters
function calculateOperations($param1, $param2, $param3) {
    $results = array(
        "addition" => $param1 + $param2 + $param3,
        "subtraction" => $param1 - $param2 - $param3,
        "multiplication" => $param1 * $param2 * $param3,
        "division" => $param1 / $param2 / $param3
    );
    return $results;
}

// Define the three parameters
$param1 = 25;
$param2 = 13;
$param3 = 6;

// Call the function and store results
$results = calculateOperations($param1, $param2, $param3);

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 3</h2>
        <p>User Defined Functions.</p>

        <table class="task3-table">
            <thead>
                <tr>
                    <th colspan="2">My Parameter values: <?= $param1 ?>, <?= $param2 ?>, <?= $param3 ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Addition</td>
                    <td><?= $results['addition'] ?></td>
                </tr>
                <tr>
                    <td>Subtraction</td>
                    <td><?= $results['subtraction'] ?></td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td><?= $results['multiplication'] ?></td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td><?= $results['division'] ?></td>
                </tr>
            </tbody>
        </table>

    </section>
</main>

<?php
require('include/footer.php');
?>