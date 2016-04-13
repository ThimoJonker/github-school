<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 12-4-2016
 * Time: 18:43
 */

function randLetter()
{
    $abc = "abcdefghijklmnopqrstuvwxyz";
    $abcLength = strlen($abc);
    $string = "";
    for($i = 0; $i < 8; $i++){
        $abcRand = rand(0, $abcLength - 1);
        $string .= $abc[$abcRand];
    }
    return strtoupper($string);
}


$filename   = $_FILES['fileToUpload']['name'];
$extension  = pathinfo($filename, PATHINFO_EXTENSION);
$new        = randLetter();
$newfilename=$new.".".$extension;

$uploadOk = 1;
$imageFileType = pathinfo($filename, PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Bestand moet een doc of docx zijn.";
        $uploadOk = 0;
    }
}

// Alleen doc of docx
if($imageFileType != "doc" && $imageFileType != "docx" ) {
    echo "Alleen doc en docx bestanden.";
    $uploadOk = 0;
}

if ($uploadOk == false) {
    echo "Bestand is niet geupload.";
// Als alles goed is, wordt $uploadOk dus 1 en wordt bestand geupload naar content folder
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../content/"  . $newfilename)) {
        echo "Het bestand is geupload.";
    } else {
        echo "Sorry, er is iets fout gegaan met uploaden.";
    }
}