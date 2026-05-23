<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $tableLimit = 10;
?>

<div class="container">

    <h2>Multiplication Table</h2>

    <div class="table-wrapper">

        <table class="mult-table">

            <?php for ($row = 0; $row <= $tableLimit; $row++): ?>
                <tr>

                    <?php for ($col = 0; $col <= $tableLimit; $col++): ?>

                        <?php
                        $value = $row * $col;

                        // Alternating color pattern
                        $cellClass = (($row + $col) % 2 == 0)
                            ? 'grey'
                            : 'purple';
                        ?>

                        <td class="<?php echo $cellClass; ?>">
                            <?php echo $value; ?>
                        </td>

                    <?php endfor; ?>

                </tr>
            <?php endfor; ?>

        </table>

    </div>

    <div style="text-align:center;">
        <a href="homepage.php" class="back-btn">
            Back to Home
        </a>
    </div>

</div>

</body>
</html>