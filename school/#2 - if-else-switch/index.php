<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 3-2-2016
 * Time: 10:46
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdrachten php if else switch</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <h3>Opdracht 1</h3>

    <form name="form" action="#" method="post" class="">
        <h4>vul je cijfer in</h4>
        <input  type="text" name="number">
        <input class="btn btn-default" type="submit" name="submit" value="Zoek">
    </form>
    <?php
    if (isset($_POST['submit'])) {

        $number = $_POST['number'];

        if ($number <= 5) {
            echo "<h4 class='text-danger'>Onvoldoende!</h4>";
        } elseif ($number > 5 && $number <= 8) {
            echo "<h4 class='text-warning'> Voldoende</h4>";
        } elseif ($number > 8 && $number <= 10) {
            echo "<h4 class='text-success'> Goed</h4>";
        } else {
            echo "<h4 class='text-muted'> Fraude!</h4>";
        }
    }
    ?>
    <hr>
    <h3>Opdracht 2</h3>

    <form name="forma" action="#" method="post" class="">
        <h4>vul een je leeftijd in</h4>
        <input class="" type="text" name="geboorte" value="">
        <input class="btn btn-default" type="submit" name="submitGJ" value="Zoek">
    </form>

    <?php
    if (isset($_POST['submitGJ'])) {

        $GJ = $_POST['geboorte'];

        if ($GJ + 10 >= 1970 && $GJ + 10 <= 1979) {
            echo "Uit de seventies";
        } elseif ($GJ + 10 >= 1980 && $GJ + 10 <= 1989) {
            echo "Uit de eighties";
        } elseif ($GJ + 10 >= 1990 && $GJ + 10 <= 1999) {
            echo "Uit de nineties";
        } elseif ($GJ + 10 >= 2000 && $GJ + 10 <= 2009) {
            echo "Uit de zeros";
        } else {
            echo "geen correcte geboortedatum";
        }
    }
    ?>
    <hr>
    <h3>Opdracht 3</h3>

    <?php
    $a = 10;
    $b = 10;
    $c = "10";

    if (is_int($a) && is_int($b) && is_int($c)) {
        echo "a, b en c zijn gelijk";
    } elseif (is_string($c)) {
        echo "c is een string";
    }
    ?>
    <hr>

    <h3>Opdracht 4</h3>
    <form name="forma2" action="#" method="post" class="">
        <h4>vul een je leeftijd in</h4>
        <input class="" type="text" name="geboorte2" value="">
        <input class="btn btn-default" type="submit" name="submitGJ2" value="Zoek">
    </form>

    <?php
    if (isset($_POST['submitGJ2'])) {

        $GJ = $_POST['geboorte2'];

        $a = 10;
        echo ($GJ + 10 >= 1970 && $GJ + 10 <= 1979 ? '<p>Uit de seventies</p>' : '');
        echo ($GJ + 10 >= 1980 && $GJ + 10 <= 1989 ? '<p>Uit de eighties</p>' : '' );
        echo ($GJ + 10 >= 1990 && $GJ + 10 <= 1999 ? '<p>Uit de nineties</p>' : '' );
        echo ($GJ + 10 >= 2000 && $GJ + 10 <= 2009 ? '<p>Uit de zeros</p>' : '<p>geen correcte geboortedatum</p>' );
        }
    ?>

    <hr>

    <h3>Opdracht 5</h3>

    <form action="#" method="post">
        <input type="radio" name="radio" value="sinsaasappel">sinsaasappel
        <input type="radio" name="radio" value="kroket">kroket
        <input type="radio" name="radio" value="banaan">banaan
        <input type="radio" name="radio" value="appel">appel
        <input type="radio" name="radio" value="zand">zand
        <input type="submit" name="submit5" value="check" class="btn btn-default">
    </form>
    <?php
        if(isset($_POST['radio'])) {


            $product = "appel";

            switch ($product) {
                case $_POST['radio'] === "sinsaasappel";
                    echo "product is een sinaasappel";
                    break;
                case $_POST['radio'] === "kroket";
                    echo "product is een kroket";
                    break;
                case $_POST['radio'] === "banaan";
                    echo "product is een banaan";
                    break;
                case $_POST['radio'] === "appel";
                    echo "product is een appel";
                    break;
                default:
                    echo "Er is geen match";
            }
        }
    ?>

</div>

</body>
</html>