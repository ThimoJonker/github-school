<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4 - Do/foreach/for</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<div class="container">
    <h3>Opdracht 1</h3>
    <form action="">
        <select>
            <?php for($i=1910; $i < 2017; $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor; ?>
        </select>
    </form>
    <hr>

    <h3>Opdracht 2</h3>
    <?php $product = array("Hamburger" => "560", "Patat met Mayo" => "600", "Patat Kapsalon" => "1600"); ?>
    <?php foreach($product as $prod => $cal){
        echo "In het product " . $prod . " zitten " . $cal . " calorieen <br />";
    } ?>
    <hr>

    <h3>Opdracht 3</h3>
    <?php $a = 2012;
    do{
        $a = $a + 4;
        echo $a . "<br />";

    }
    while($a < 2084);
    ?>

    <h3>Opdracht 4</h3>
    <?php $auto_array = array(
        "1" => array(
            "auto" => "Audi A6",
            "max snelheid" => "240 km/h",
            "verbruik" => "12"
        ),
        "2" => array(
            "auto" => "Porsche 911",
            "max snelheid" => "290 km/h",
            "verbruik" => "8"
        ),
        "3" => array(
            "auto" => "Fiat panda",
            "max snelheid" => "140 km/h",
            "verbruik" => "22"
        )
    );
    foreach($auto_array as $x){
        if($x["verbruik"] >= 11){
            echo "De " . $x["auto"] . "(lekker zuinig!)" . " kan " . $x["max snelheid"] . " rijden! <br />";
        }else{
            echo "De " . $x["auto"] . " kan " . $x["max snelheid"] . " rijden! <br />";

        }
    }

    ?>




</div>
</body>
</html>