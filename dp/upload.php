<?php
/**
 * Created by PhpStorm.
 * User: d8user
 * Date: 01/01/2018
 * Time: 22:46
 */

$token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://content.dropboxapi.com/2/files/upload");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$post = array(
    "file" => "@" .realpath("local_file.txt")
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Authorization: Bearer ".$token;
//$headers[] = "Dropbox-Api-Arg: {\"path\": \"/Homework/math/Matrices.txt\",\"mode\": \"add\",\"autorename\": true,\"mute\": false}";
$headers[] = "Dropbox-Api-Arg: {\"path\": \"/ojo.jpg\",\"mode\": \"add\",\"autorename\": true,\"mute\": false}";
$headers[] = "Content-Type: application/octet-stream";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//echo $result;



var_dump($result);
echo "<br>";
echo  $http_code;


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);