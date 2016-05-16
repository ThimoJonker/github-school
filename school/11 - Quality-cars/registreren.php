<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 27-3-2016
 * Time: 18:16
 */
include('includes/header.php');



?>
    <div class="container">
        <div class="wrapper">
            <form action="#" method="post" class="form-signin">
                <h3 class="form-signin-heading">Register pagina</h3>
                <hr class="colorgraph"><br>

                <input type="text" class="form-control" name="Naam" placeholder="Naam" />
                <input type="text" class="form-control" name="Adres" placeholder="Adres" />
                <input type="text" class="form-control" name="Postcode" placeholder="Postcode" />
                <input type="text" class="form-control" name="Plaats" placeholder="Plaats" />
                <input type="text" class="form-control" name="MobieleTelefoon" placeholder="Mobiele telefoon" />
                <input type="email" class="form-control" name="Email" placeholder="Email" />
                <input type="date" class="form-control" name="Geboortedatum" placeholder="Geboortedatum" />
                <input type="text" class="form-control" name="RijbewijsType" placeholder="Rijbewijs type" />
                <input type="text" class="form-control" name="RijbewijsNummer" placeholder="Rijbewijs nummer" />
                <hr>
                <input type="text" class="form-control" name="Gebruikersnaam" placeholder="Gebruikersnaam" />
                <input type="password" class="form-control" name="Wachtwoord" placeholder="Wachtwoord" />


                <button class="btn btn-lg btn-primary btn-block"  name="RegisterSubmit" type="Submit">Registreer</button>



            </form>
        </div>






<?php

include('includes/footer.php'); ?>