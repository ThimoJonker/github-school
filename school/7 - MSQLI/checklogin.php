<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 9-3-2016
 * Time: 14:26
 */
// toevoegen van html login pagina
include 'database.php';



$con = connectDB();
session_start();
if(isset($_POST['Submit'])){
    $myusername = $_POST['Username'];
    $mypassword = $_POST['Password'];

    $result = $con->prepare("SELECT username FROM login WHERE username = ? AND password = ? LIMIT 1");
    $result->bind_param("ss", $myusername, $mypassword);
    $result->execute();
    $result->bind_result($ant);
    $result->fetch();

    if (!$ant == $myusername) {
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