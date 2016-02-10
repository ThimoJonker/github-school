<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 10-2-2016
 * Time: 11:50
 */?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5 - build-in functions</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>Opdracht 1</h3>
    <?php
    $naam = "Thimo";
    $length = strlen($naam);
    $pos = rand(0, $length);
    echo strpos($naam, $pos);
   echo $naam;
    ?>


</div>
</body>
</html>
