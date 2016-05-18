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

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __construct()
    {
        $this->db = new DatabaseMuziek();
        $this->con = $this->db->connectDB();
    }

    public function Aanmaken(){
//        $db = new DatabaseMuziek();
//        $con = $db->connectDB();

        $this->con->query("INSERT INTO artiesten(echte_naam, artiestennaam, land, woonplaats, geboortedatum, website, biografie) VALUES('{$this->echte_naam}','{$this->artiestennaam}','{$this->land}','{$this->woonplaats}','{$this->geboortedatum}','{$this->website}','{$this->biografie}')");
    }
    public function Bijwerken($id){
//        $db = new DatabaseMuziek();
//        $con = $db->connectDB();

        $sql = "UPDATE artiesten SET echte_naam='{$this->echte_naam}',artiestennaam='{$this->artiestennaam}',land='{$this->land}',woonplaats='{$this->woonplaats}',geboortedatum='{$this->geboortedatum}',website='{$this->website}',biografie='{$this->biografie}' WHERE id = $id";

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
        $return = null;
        $sql = "SELECT * FROM artiesten WHERE artiestennaam = '$naam'";
        $result = mysqli_query($this->con, $sql);

        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
               $return[$i][0] = $row[0];
               $return[$i][1] = $row[1];
               $return[$i][2] = $row[2];
               $return[$i][3] = $row[3];
               $return[$i][4] = $row[4];
               $return[$i][5] = $row[5];
               $return[$i][6] = $row[6];
               $i++;
            }
        }
        return $return;
    }
}