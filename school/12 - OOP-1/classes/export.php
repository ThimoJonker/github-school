<?php

/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 11-5-2016
 * Time: 18:46
 */
class Export
{

    public function schrijfArtiest($message){
        $fp = fopen('artiesten.txt', 'wt');
        fwrite($fp, $message . "\r\n");
        fclose($fp);
    }
}