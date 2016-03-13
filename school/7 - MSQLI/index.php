<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 9-3-2016
 * Time: 13:44
 */
include 'database.php';

$query = "SELECT naam FROM `naam`";

$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
        echo $row["naam"];
    }
}