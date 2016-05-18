<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 11-5-2016
 * Time: 10:17
 */

include('classes/artiesten1.php');
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

    <div class="col-md-3">
        <h2>Opzoeken</h2>

        <form method="post" class="form-group">
            <label for="txtValue">Zoek op Artiestennaam</label>
            <input name="txtValue" id="txtValue" type="text" class="form-control">

            <input name="btnSubmit" type="submit" class="btn btn-default" value="Zoek">
            <br/>
            <?php if (isset($_POST['btnSubmit'])) {
                $txtName = $_POST['txtValue'];
                $artiest = new Artiesten();
                //    print_r($artiest->Lezen($txtName));
                $array = $artiest->Lezen($txtName);
                print_r($array);
            } ?>
        </form>
    </div>

    <div class="col-md-3">
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

            <input name="btnVoegtoe" type="submit" class="btn btn-default" value="Voeg toe">
            <?php if (isset($_POST['btnVoegtoe'])) {

                $newArtiest = new Artiesten();

                $newArtiest->echte_naam = $_POST['naam'];
                $newArtiest->artiestennaam = $_POST['a_naam'];
                $newArtiest->land = $_POST['land'];
                $newArtiest->woonplaats = $_POST['woonplaats'];
                $newArtiest->geboortedatum = $_POST['datum'];
                $newArtiest->website = $_POST['webiste'];
                $newArtiest->biografie = $_POST['biografie'];

                $newArtiest->Aanmaken();


            } ?>
        </form>
    </div>

    <div class="col-md-3">
        <h2>Wijzigen</h2>

        <form method="post" class="form-group">
            <label for="id">Id van artiest die je wilt wijzigen</label>
            <input type="text" id="id" class="form-control" name="id">

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

            <input name="btnWijzig" type="submit" class="btn btn-default" value="Wijzig">
            <?php if (isset($_POST['btnWijzig'])) {
                $newArtiest = new Artiesten();
                $id = $_POST['id'];

                $newArtiest->echte_naam = $_POST['naam'];
                $newArtiest->artiestennaam = $_POST['a_naam'];
                $newArtiest->land = $_POST['land'];
                $newArtiest->woonplaats = $_POST['woonplaats'];
                $newArtiest->geboortedatum = $_POST['datum'];
                $newArtiest->website = $_POST['webiste'];
                $newArtiest->biografie = $_POST['biografie'];

                $newArtiest->Bijwerken($id);

            } ?>
        </form>
    </div>

    <div class="col-md-3">
        <h2>Verwijderen</h2>
        <form method="post">
            <label for="verId">Id van artiest die je wilt verwijderen</label>
            <input type="text" id="verId" class="form-control" name="verId">
            <input type="submit" name="btnVerwijder" class="btn btn-warning" value="Verwijder">
            <?php if(isset($_POST['btnVerwijder'])){
                $id = $_POST['verId'];
                $verArtiest = new Artiesten();
                $verArtiest->Verwijderen($id);
            } ?>
        </form>
    </div>


</div>

</body>
</html>
