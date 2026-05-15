<?php
/**
 * Technical-Summative Assessment 1 - Activity 2
 * PHP Multiplication Table with Alternating Colors
 * Uses: Nested for loops, modulo operator, conditional logic
 */

$tableLimit = 10; // Size of the multiplication table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Title uses existing h2 styling from your CSS -->
        <h2>Multiplication Table</h2>
        
        <!-- Table Wrapper (matches your updated CSS) -->
        <div class="table-wrapper">
            <table class="mult-table">
                <!-- Header Row -->
                <thead>
                    <tr>
                        <th>×</th>
                        <?php for ($i = 1; $i <= $tableLimit; $i++): ?>
                            <th><?php echo $i; ?></th>
                        <?php endfor; ?>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    <?php 
                    // Outer loop: Generates rows (1 to 10)
                    for ($row = 1; $row <= $tableLimit; $row++): 
                        // Control structure: Alternates CSS class based on row number
                        // Uses class names that match your CSS: row-even / row-odd
                        $rowClass = ($row % 2 === 0) ? 'row-even' : 'row-odd';
                    ?>
                        <tr class="<?php echo $rowClass; ?>">
                            <!-- Row Header -->
                            <th><?php echo $row; ?></th>
                            
                            <?php 
                            // Inner loop: Generates columns (1 to 10)
                            for ($col = 1; $col <= $tableLimit; $col++): 
                            ?>
                                <td><?php echo $row * $col; ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

        <!-- Updated Back Button -->
        <a href="homepage.php" class="back-btn">🏠 Back to Home</a>
    </div>
</body>
</html>