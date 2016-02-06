<?php
/**
 * Created by PhpStorm.
 * User: Tammo Laptop
 * Date: 3-2-2016
 * Time: 10:49
 */


if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry\n";
        }
    }

    closedir($handle);
}
