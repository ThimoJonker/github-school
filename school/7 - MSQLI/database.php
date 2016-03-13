<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 9-3-2016
 * Time: 13:31
 */



function connectDB(){
    $db_host = 'localhost';
    $db_name = 'dbSchool';
    $db_user = 'root';
    $db_pass = '';

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if($mysqli->connect_error){
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }else{
        return $mysqli;
    }
}
