<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 24-2-2016
 * Time: 09:39
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6 - Functionst</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <h3>Opdracht 1</h3>
    <form action="#" method="post">
        <input name="geboortedag" type="number" placeholder="geboortedag">
        <input name="geboortemaand" type="number" placeholder="geboortemaand">
        <input type="submit" name="btnGeboorte" value="Check sterrenbeeld">
    </form>
    <?php
    function sterrenBeeld($geboortedag, $geboortemaand){
        switch($geboortemaand){
            case 1:
                if($geboortedag <= 20){
                    return "Steenbok";
                }elseif($geboortedag >= 21){
                    return "Waterman";
                }
            case 2:
                if($geboortedag <= 18){
                    return "Waterman";
                }elseif($geboortedag >= 19){
                    return "Vissen";
                }
            case 3:
                if($geboortedag <= 20){
                    return "Vissen";
                }elseif($geboortedag >= 21){
                    return "Ram";
                }
            case 4:
                if($geboortedag <= 20){
                    return "Ram";
                }elseif($geboortedag >= 21){
                    return "Stier";
                }
            case 5:
                if($geboortedag <= 21){
                    return "Stier";
                }elseif($geboortedag >= 22){
                    return "Tweelingen";
                }
            case 6:
                if($geboortedag <= 21){
                    return "Tweelingen";
                }elseif($geboortedag >= 22){
                    return "Kreeft";
                }
            case 7:
                if($geboortedag <= 23){
                    return "Kreeft";
                }elseif($geboortedag >= 24){
                    return "Leeuw";
                }
            case 8:
                if($geboortedag <= 23){
                    return "Leeuw";
                }elseif($geboortedag >= 24){
                    return "Maagd";
                }
            case 9:
                if($geboortedag <= 23){
                    return "Maagd";
                }elseif($geboortedag >= 24){
                    return "Weegschaal";
                }
            case 10:
                if($geboortedag <= 23){
                    return "Weegschaal";
                }elseif($geboortedag >= 24){
                    return "Schorpioen";
                }
            case 11:
                if($geboortedag <= 22){
                    return "Schorpioen";
                }elseif($geboortedag >= 23){
                    return "Boogschutter";
                }
            case 12:
                if($geboortedag <= 22){
                    return "Boogschutter";
                }elseif($geboortedag >= 23){
                    return "Steenbok";
                }
        }
    }
    if(isset($_POST['btnGeboorte'])){
        $dag = $_POST['geboortedag'];
        $maand = $_POST['geboortemaand'];
        echo "<h4 class='text-info'>" . sterrenBeeld($dag, $maand) . "</h4>";
    }

    ?>

    <h3>Opdracht 2</h3>

    <form action="#" method="post">
        <input name="txtName" type="text" placeholder="Vul naam in..">
        <input type="submit" name="btnName" value="Draai naam!">
    </form>
    <?php

    if(isset($_POST['btnName'])){
        $txtName = $_POST['txtName'];
        function omdraai($string){
            return strrev($string);
        }
        echo "<h4 class='text-info'>" .omdraai($txtName) . "</h4>";

    }
    ?>

    <h3>Opdracht 3</h3>
    <?php
    function snoepjes($snoep){
        foreach($snoep as $x){
            echo $x;
        }
    }
    snoepjes(["Koek", "Drop", "Chips", "Cola"]);
    ?>

    <h3>Opdracht 4</h3>
    <?php
    function gekkeDatum(){
        $array = ["%A","%H:","%M:","%S","%B"];
        setlocale(LC_ALL, 'Dutch');
        return strftime("%A %H:%M:%S %B");
    }
    echo gekkeDatum();
    ?>

    <h3>Opdracht 5</h3>
    <form action="#" method="post">
        <input name="getal1" type="number" placeholder="getal 1">
        <input type="submit" name="btn"  value="+">
        <input type="submit" name="btn" value="-">
        <input type="submit" name="btn" value="Wortel">
        <input name="getal2" type="number" placeholder="getal 2">
    </form>
    <?php
    function bereken($num1, $num2){
        $square = '&#8730';
        $btn = $_POST['btn'];
        if($btn == '+')
            return $num1 + $num2;
        elseif($btn == '-')
            return $num1 - $num2;
        elseif($btn == 'Wortel')
            return sqrt($num1);
    }
    if(isset($_POST['btn'])){
        $getal1 = $_POST['getal1'];
        $getal2 = $_POST['getal2'];
        echo bereken($getal1, $getal2);
    }
    ?>
</div>
</body>
</html>
