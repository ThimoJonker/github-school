<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 15-3-2016
 * Time: 20:21
 */
include 'database.php';

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


$con = connectDB();
$random = selectRandom(); // maakt nieuwe random aan
echo "de random id in de selectRandomImage function is: " .$random; // check if random is the same
$result = $con->query("SELECT image, name FROM image WHERE id = '$random'");



function coolPlusOne(){
    $randomId = $_POST['hiddenrandom'];
    $con = connectDB();
    $con->query("UPDATE image SET cool = cool + 1 WHERE id = '$randomId'");
}

if(isset($_POST['cool'])) {
    coolPlusOne();
}