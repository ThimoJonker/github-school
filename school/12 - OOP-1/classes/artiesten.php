<?php

/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 11-5-2016
 * Time: 10:28
 */

include('database.php');

class Artiesten
{
    public $echte_naam;
    public $artiestennaam;
    public $land;
    public $woonplaats;
    public $geboortedatum;
    public $website;
    public $biografie;

    public function __construct($echte_naam, $artiestennaam, $land, $woonplaats, $geboortedatum, $website, $biografie)
    {
        $this->echte_naam = $echte_naam;
        $this->artiestennaam = $artiestennaam;
        $this->land = $land;
        $this->woonplaats = $woonplaats;
        $this->geboortedatum = $geboortedatum;
        $this->website = $website;
        $this->biografie = $biografie;
    }

    public function Aanmaken(Artiesten $artiest){
        $db = new DatabaseMuziek();
        $con = $db->connectDB();

        $con->query("INSERT INTO artiesten(echte_naam, artiestennaam, land, woonplaats, geboortedatum, website, biografie) VALUES('{$artiest->echte_naam}','{$artiest->artiestennaam}','{$artiest->land}','{$artiest->woonplaats}','{$artiest->geboortedatum}','{$artiest->website}','{$artiest->biografie}')");
    }
    public function Bijwerken(){

    }
    public function Verwijderen(){

    }
    public function Lezen(){

    }
}