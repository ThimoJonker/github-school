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

    public $db;
    public $con;

    public function __construct1(){

        $this->db = new DatabaseMuziek();
        $this->con = $this->db->connectDB();
    }
    public function __construct($echte_naam, $artiestennaam, $land, $woonplaats, $geboortedatum, $website, $biografie)
    {
        $this->echte_naam = $echte_naam;
        $this->artiestennaam = $artiestennaam;
        $this->land = $land;
        $this->woonplaats = $woonplaats;
        $this->geboortedatum = $geboortedatum;
        $this->website = $website;
        $this->biografie = $biografie;

        $this->db = new DatabaseMuziek();
        $this->con = $this->db->connectDB();
    }

    public function Aanmaken(Artiesten $artiest){
//        $db = new DatabaseMuziek();
//        $con = $db->connectDB();

        $this->con->query("INSERT INTO artiesten(echte_naam, artiestennaam, land, woonplaats, geboortedatum, website, biografie) VALUES('{$artiest->echte_naam}','{$artiest->artiestennaam}','{$artiest->land}','{$artiest->woonplaats}','{$artiest->geboortedatum}','{$artiest->website}','{$artiest->biografie}')");
    }
    public function Bijwerken(Artiesten $artiest, $id){
//        $db = new DatabaseMuziek();
//        $con = $db->connectDB();

        $sql = "UPDATE artiesten SET echte_naam='{$artiest->echte_naam}',artiestennaam='{$artiest->artiestennaam}',land='{$artiest->land}',woonplaats='{$artiest->woonplaats}',geboortedatum='{$artiest->geboortedatum}',website='{$artiest->website}',biografie='{$artiest->biografie}' WHERE id = $id";

        if(mysqli_query($this->con, $sql)){
            echo 'cool';
        }else{
            echo 'error: ' . mysqli_error($this->con);
        }

    }

    public function Verwijderen($id){
//        $db = new DatabaseMuziek();
//        $con = $db->connectDB();

        $sql = "DELETE FROM artiesten WHERE id = $id";
        if(mysqli_query($this->con, $sql)){
            echo 'cool';
        }else{
            echo 'error: ' . mysqli_error($this->con);
        }
    }

    public function Lezen($naam){
        $sql = "SELECT * FROM artiesten WHERE artiestennaam = '$naam'";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                for($i = 1; $i < 7; $i++){
                    echo $row[$i] . "<br />";
                }
            }
        }

    }
}