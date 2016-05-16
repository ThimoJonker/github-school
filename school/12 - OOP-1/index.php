<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 11-5-2016
 * Time: 10:17
 */

include('classes/artiesten.php');
include('classes/export.php');




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP - 1</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div class="container">

        <form method="post" class="form-group">
            <div class="col-md-3">
                <h2>Opzoeken</h2>
                <label for="txtValue">Zoek op Artiestennaam</label>
                <input name="txtValue" id="txtValue" type="text" class="form-control">

                <input name="btnSubmit" type="submit" class="btn btn-default" value="Zoek">
                <br />
                <?php if(isset($_POST['btnSubmit'])){
                    $txtName = $_POST['txtValue'];
                    $artiest = new Artiesten();
                    //    print_r($artiest->Lezen($txtName));
                    $array = $artiest->Lezen($txtName);
                    //    print_r($array, true);
                } ?>
            </div>
            <div class="col-md-3 col-md-offset-3">
                <h2>Toevoegen</h2>
                <form method="post" class="form-group">
                    <label for="naam">Naam</label>
                    <input type="text" id="naam" class="form-control" name="naam"/>

                    <label for="a_naam">Artiesten naam</label>
                    <input type="text" id="a_naam" class="form-control" name="a_naam"/>

                    <label for="land">Land</label>
                    <input type="text" id="land" class="form-control" name="land"/>

                    <label for="woonplaats">Woonplaats</label>
                    <input type="text" id="woonplaats" class="form-control" name="woonplaats"/>

                    <label for="datum">Geboortedatum</label>
                    <input type="text" id="datum" class="form-control" name="datum"/>

                    <label for="website">Webiste</label>
                    <input type="text" id="website" class="form-control" name="webiste"/>

                    <label for="biografie">Biografie</label>
                    <textarea name="biografie" id="biografie" cols="30" rows="10" class="form-control"></textarea>

                    <input name="btnVoegtoe" type="submit" class="btn btn-default" value="Zoek">
                    <?php if(isset($_POST['btnVoegtoe'])){

                        $naam = $_POST['naam'];
                        $a_naam = $_POST['a_naam'];
                        $land = $_POST['land'];
                        $woonplaats = $_POST['woonplaats'];
                        $datum = $_POST['datum'];
                        $webiste = $_POST['webiste'];
                        $biografie = $_POST['biografie'];

                        $newArtiest = new Artiesten($naam,$a_naam,$land,$woonplaats,$datum,$webiste,$biografie);
                        $newArtiest->Aanmaken($newArtiest);


                    } ?>
                </form>
            </div>
        </form>
</div>

</body>
</html>
