<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 12-4-2016
 * Time: 16:26
 */

// alleen naam van bestand, dus zonder extentie
function leesTxt($textbestand){
    $file = fopen("content\\$textbestand.txt", "r");
    $text = fread($file, filesize("content\\text.txt"));
    fclose($file);
    return $text;
}
//echo leesTxt("text");


function errorLog(){
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__FILE__).'/logs/log.txt');
    error_reporting(E_ALL);
}
errorLog();



