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
    $naam = "ThimoJonker";
    $length = strlen($naam);
    $pos = rand(0, $length - 1);

//    echo strpos($naam, $pos);
    echo $naam[$pos];
    ?>
    <hr>

    <h3>Opdracht 2</h3>
    <?php
    $klasgenoten = ["Michael", "Thierry", "Gijs", "Gabriel", "Roy", "Leon", "Armando", "Luuk"];
    sort($klasgenoten);
    print_r($klasgenoten);
    $aantal = count($klasgenoten);
    $random = rand(0, $aantal - 1);
    echo strtoupper($klasgenoten[$random]);
    ?>
    <hr>
    <h3>Opdracht 3</h3>
    <?php
    $abc = "abcdefghijklmnopqrstuvwxyz";

    $abcLength = strlen($abc);

    for($i = 0; $i < 10; $i++){
        $abcRand = rand(0, $abcLength - 1);
            if($i < 2){
                echo $abc[$abcRand];
                if($i == 1){
                    echo "-";
                }
            }
            else{
                echo rand(0, 9);
            }
    }
    ?>
    <hr>
    <h3>Opdracht</h3>



</div>
</body>
</html>
