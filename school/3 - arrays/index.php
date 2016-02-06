<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 6-2-2016
 * Time: 16:25
 */?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdrachten arrays</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">

    <h3>Opdracht 1</h3>
    <?php
    $meubels = ["Tafel", "Stoel", "Kast", "Bank"];
    ?>

    <hr>

    <h3>Opdracht 2</h3>
    <?php
    $persoon = array("Ahmed"=>"26", "Monique"=>"31", "Priscilla"=>"18");
    ?>

    <hr>

    <h3>Opdracht 3</h3>

    <div class="col-md-4">
        <table class="table">
            <tr>
                <th>Naam</th>
                <th>leeftijd</th>
            </tr>
            <?php foreach($persoon as $x => $value) : ?>
            <tr>
                <td><?php echo $x ?></td>
                <td><?php echo $value ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
    <div class="clearfix"></div>

    <h3>Opdracht 4</h3>
    <?php array_push($meubels, "Salontafel", "Bureau");
    print_r($meubels);
    ?>

    <h3>Opdracht 5 & 6</h3>
    <?php
    $persoon_multi = array(
        "1" => array(
            "naam" => "Ahmed",
            "leeftijd" => 26,
            "geslacht" => "man"
        ),
        "2" => array(
            "naam" => "Monique",
            "leeftijd" => 31,
            "geslacht" => "vrouw"
        ),
        "3" => array(
            "naam" => "Priscilla",
            "leeftijd" => 18,
            "geslacht" => "vrouw"
        )
    );
    ?>

    <div class="col-md-4">
        <table class="table">
            <tr>
                <th>Naam</th>
                <th>Leeftijd</th>
                <th>Geslacht</th>
            </tr>
            <?php foreach($persoon_multi as $p) : ?>
                <tr>
                    <td><?php echo $p['naam']; ?></td>
                    <td><?php echo $p['leeftijd']; ?></td>
                    <td><?php echo $p['geslacht']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>
</body>
</html>