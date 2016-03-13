<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 9-3-2016
 * Time: 14:26
 */
// toevoegen van html login pagina
include 'login.html';
include 'database.php';



$con = connectDB();
session_start();
if(isset($_POST['Submit'])){
    $myusername = $_POST['Username'];
    $mypassword = $_POST['Password'];

    $result = $con->query("SELECT * FROM login WHERE username = '{$myusername}' AND password = '{$mypassword}' LIMIT 1");
    if (!$result->num_rows == 1) {
        echo "<p>Fout bij het inloggen..</p>";
    } else {
        echo "<p>Welkom $myusername je bent ingelogd</p>";
    }
}


//CREATE USER AND PASSWORD WITH PREPAIRED STATEMENTS

//$con = connectDB();
//
//$sqlaa = "INSERT INTO login (username, password) VALUES (?,?)";
//$stmt = $con->prepare($sqlaa);
//$stmt->bind_param("ss", $username, $password);
//
////$username = "Jeroen";
////$password = "Koomen";
////$stmt->execute();
//
//$stmt->close();