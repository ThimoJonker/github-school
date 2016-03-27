<?php

/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 27-3-2016
 * Time: 19:42
 */
include('database.php');


class Login{

    public $username;
    protected $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function checkLogin(){

        $db = new Database();
        $con = $db->connectDB();

        $result = $con->query("SELECT gebruikerId FROM gebruikers WHERE gebruikersnaam = '{$this->username}' AND wachtwoord = '{$this->password}' LIMIT 1");

        if($result->num_rows == 1){
            return true;
        }else{
            return false;
        }
    }

}

if(isset($_POST['Submit'])) {
    $login = new Login($_POST['Username'],$_POST['Password']);
    if($login->checkLogin()){
        session_start();
        header("Location: index.php");

    }else{
        echo 'Fout bij inloggen.';
    }
}

