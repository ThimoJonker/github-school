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
// echo "de random id in de selectRandomImage function is: " .$random; // check if random is the


function selectRandomImages ($random)
{
    $i=0;
    $con = connectDB();
    $result = $con->query("SELECT image, name FROM image WHERE id = '$random'");
    while ($row = mysqli_fetch_array($result)){

        $return[$i]['image'] = $row["image"];
        $return[$i]['name'] = $row["name"];
        $i++;
    }
    return $return;
}

function coolPlusOne($randomId){
    $con = connectDB();
    $result = $con->prepare("UPDATE image SET cool = cool + 1 WHERE id = ?");
    $result->bind_param('i', $randomId);
    $result->execute();

}
function coolMinusOne($randomId){
    $con = connectDB();
    $result = $con->prepare("UPDATE image SET nietcool = nietcool + 1 WHERE id = ?");
    $result->bind_param('i', $randomId);
    $result->execute();
}

if(isset($_POST['cool'])) {
    coolPlusOne($_POST['hiddenrandomCool']);
}
if(isset($_POST['nietcool'])) {
    coolMinusOne($_POST['hiddenrandomNietCool']);
}
function selectTop(){
    $i = 0;
    $con = connectDB();
    $result2 = $con->query("SELECT image, name, cool FROM IMAGE ORDER BY cool DESC");

    while ($row = mysqli_fetch_array($result2)){
        $return[$i]['image'] = $row["image"];
        $return[$i]['name'] = $row["name"];
        $return[$i]['cool'] = $row["cool"];
        $i++;
    }
    return $return;
}


