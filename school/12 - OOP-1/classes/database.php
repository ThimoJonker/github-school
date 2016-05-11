<?php

/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 11-5-2016
 * Time: 10:42
 */
class DatabaseMuziek
{
    function connectDB(){
        $db_host = 'localhost';
        $db_name = 'dbschool';
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
}