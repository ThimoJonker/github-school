<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 15-3-2016
 * Time: 12:09
 */
include 'database.php';
$con = connectDB();

$random = selectRandom();

echo $random;


$result = $con->query("SELECT image, name FROM image WHERE id = '$random'");


function checkHowManyImages(){
    $con = connectDB();
    $aantalImage = $con->query("SELECT COUNT(image) FROM image");
    $row = $aantalImage->fetch_row();
    return $row[0];
}
function selectRandom(){
    $random = rand(1, checkHowManyImages());
    return $random;
}
function cool(){

    $this->$con->query("UPDATE image SET cool = cool + 1 WHERE id = '$random'");
}


?>