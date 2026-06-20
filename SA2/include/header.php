<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'SA 2' ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="banner">
                <h1>SA 2</h1>
            </div>
            <nav class="navigation">
                <ul>
                    <?php if (basename($_SERVER['PHP_SELF']) !== 'homepage.php'): ?>
                        <li><a href="homepage.php">Home</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>