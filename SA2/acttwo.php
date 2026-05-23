<?php

// 1. Cube: V = s³
function calculateCubeVolume($side) {
    return pow($side, 3);
}

// 2. Right Rectangular Prism: V = l × w × h
function calculatePrismVolume($length, $width, $height) {
    return $length * $width * $height;
}

// 3. Cylinder: V = π × r² × h
function calculateCylinderVolume($radius, $height) {
    return M_PI * pow($radius, 2) * $height;
}

// 4. Pyramid: V = (1/3) × B × h (where B is base area)
function calculatePyramidVolume($baseArea, $height) {
    return (1/3) * $baseArea * $height;
}

// 5. Cone: V = (1/3) × π × r² × h
function calculateConeVolume($radius, $height) {
    return (1/3) * M_PI * pow($radius, 2) * $height;
}

// 6. Sphere: V = (4/3) × π × r³
function calculateSphereVolume($radius) {
    return (4/3) * M_PI * pow($radius, 3);
}

$cubeSide = 5;
$prismLength = 6;
$prismWidth = 4;
$prismHeight = 8;
$cylinderRadius = 3;
$cylinderHeight = 10;
$pyramidBaseArea = 25; 
$pyramidHeight = 9;
$coneRadius = 4;
$coneHeight = 12;
$sphereRadius = 7;

// Calculate volumes
$cubeVolume = calculateCubeVolume($cubeSide);
$prismVolume = calculatePrismVolume($prismLength, $prismWidth, $prismHeight);
$cylinderVolume = calculateCylinderVolume($cylinderRadius, $cylinderHeight);
$pyramidVolume = calculatePyramidVolume($pyramidBaseArea, $pyramidHeight);
$coneVolume = calculateConeVolume($coneRadius, $coneHeight);
$sphereVolume = calculateSphereVolume($sphereRadius);

require('include/header.php');
?>

<main class="main-content">
    <section>
        <h2>Activity 2: Volume Calculator</h2>
        <p>This program calculates the volume of different 3D shapes using user-defined PHP functions.</p>

        <div class="volume-grid">
            <!-- Cube -->
            <div class="volume-card">
                <h3>Cube</h3>
                <span class="formula">V = s³</span>
                <p>Side: <?= $cubeSide ?> units</p>
                <p class="result">Volume: <?= number_format($cubeVolume, 2) ?> cubic units</p>
            </div>

            <!-- Right Rectangular Prism -->
            <div class="volume-card">
                <h3>Right Rectangular Prism</h3>
                <span class="formula">V = l × w × h</span>
                <p>Length: <?= $prismLength ?>, Width: <?= $prismWidth ?>, Height: <?= $prismHeight ?></p>
                <p class="result">Volume: <?= number_format($prismVolume, 2) ?> cubic units</p>
            </div>

            <!-- Cylinder -->
            <div class="volume-card">
                <h3>Cylinder</h3>
                <span class="formula">V = π × r² × h</span>
                <p>Radius: <?= $cylinderRadius ?>, Height: <?= $cylinderHeight ?></p>
                <p class="result">Volume: <?= number_format($cylinderVolume, 2) ?> cubic units</p>
            </div>

            <!-- Pyramid -->
            <div class="volume-card">
                <h3>Pyramid</h3>
                <span class="formula">V = (1/3) × B × h</span>
                <p>Base Area: <?= $pyramidBaseArea ?>, Height: <?= $pyramidHeight ?></p>
                <p class="result">Volume: <?= number_format($pyramidVolume, 2) ?> cubic units</p>
            </div>

            <!-- Cone -->
            <div class="volume-card">
                <h3>Cone</h3>
                <span class="formula">V = (1/3) × π × r² × h</span>
                <p>Radius: <?= $coneRadius ?>, Height: <?= $coneHeight ?></p>
                <p class="result">Volume: <?= number_format($coneVolume, 2) ?> cubic units</p>
            </div>

            <!-- Sphere -->
            <div class="volume-card">
                <h3>Sphere</h3>
                <span class="formula">V = (4/3) × π × r³</span>
                <p>Radius: <?= $sphereRadius ?></p>
                <p class="result">Volume: <?= number_format($sphereVolume, 2) ?> cubic units</p>
            </div>
        </div>

        <h2 style="margin-top: 40px;">Volume Summary Table</h2>
        <table class="volume-summary-table">
            <thead>
                <tr>
                    <th>Shape</th>
                    <th>Dimensions</th>
                    <th>Formula</th>
                    <th>Volume (cubic units)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Cube</strong></td>
                    <td>Side: <?= $cubeSide ?></td>
                    <td>V = s³</td>
                    <td><?= number_format($cubeVolume, 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Right Rectangular Prism</strong></td>
                    <td>L: <?= $prismLength ?>, W: <?= $prismWidth ?>, H: <?= $prismHeight ?></td>
                    <td>V = l × w × h</td>
                    <td><?= number_format($prismVolume, 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Cylinder</strong></td>
                    <td>R: <?= $cylinderRadius ?>, H: <?= $cylinderHeight ?></td>
                    <td>V = π × r² × h</td>
                    <td><?= number_format($cylinderVolume, 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Pyramid</strong></td>
                    <td>Base: <?= $pyramidBaseArea ?>, H: <?= $pyramidHeight ?></td>
                    <td>V = (1/3) × B × h</td>
                    <td><?= number_format($pyramidVolume, 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Cone</strong></td>
                    <td>R: <?= $coneRadius ?>, H: <?= $coneHeight ?></td>
                    <td>V = (1/3) × π × r² × h</td>
                    <td><?= number_format($coneVolume, 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Sphere</strong></td>
                    <td>Radius: <?= $sphereRadius ?></td>
                    <td>V = (4/3) × π × r³</td>
                    <td><?= number_format($sphereVolume, 2) ?></td>
                </tr>
            </tbody>
        </table>

    </section>
</main>

<?php
require('include/footer.php');
?>