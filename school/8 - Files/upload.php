<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 12-4-2016
 * Time: 17:21
 */
$target_dir = "content/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Bestand moet een image zijn.";
        $uploadOk = 0;
    }
}
// check of file groter is dan 2mb
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Bestand is té groot, max 2mb";
    $uploadOk = 0;
}
// Alleen png en jpg
if($imageFileType != "jpg" && $imageFileType != "png" ) {
    echo "Alleen jpg en png images.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Image is niet geupload.";
// Als alles goed is, wordt $uploadOk dus 1 en wordt image geupload naar content folder
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The image ". basename( $_FILES["fileToUpload"]["name"]). " is geupload.";
    } else {
        echo "Sorry, er is iets fout gegaan met uploaden.";
    }
}