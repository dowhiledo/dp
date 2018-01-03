<?php
/**
 * Created by PhpStorm.
 * User: d8user
 * Date: 30/12/2017
 * Time: 13:21
 */

$dir = "imagenes/";
if ($opendir = opendir($dir)) {
    while (($file = readdir($opendir)) !== FALSE) {
        if( $file!="." && $file!=".."){
            echo $file."<br>";
            echo "<img src='$dir/$file'><br>";
        }
    }
}