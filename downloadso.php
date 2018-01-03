<?php
$GlobalFileHandle = null;

//function saveRemoteFile($url, $filename) {
function saveRemoteFile() {
//    global $GlobalFileHandle;

//    set_time_limit(0);

//    $filename = "hola.jpg";
//    $GlobalFileHandle = fopen($filename, 'w+');

    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_FILE, $GlobalFileHandle);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_setopt($ch, CURLOPT_USERAGENT, "MY+USER+AGENT"); //Make this valid if possible
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
//    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); # optional
//    curl_setopt($ch, CURLOPT_TIMEOUT, -1); # optional: -1 = unlimited, 3600 = 1 hour
//    curl_setopt($ch, CURLOPT_VERBOSE, false); # Set to true to see all the innards


//    curl_setopt($ch, CURLOPT_WRITEFUNCTION, 'curlWriteFile');

    //------------------------------
    $token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';
//    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_URL, "https://content.dropboxapi.com/2/files/download");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = "Authorization: Bearer " . $token;
    $headers[] = "Dropbox-Api-Arg: {\"path\": \"/12-2017/tigre.jpg\"}";
    $headers[] = "Content-Type: application/octet-stream";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//    $result = curl_exec($ch);
//    if (curl_errno($ch)) {
//        echo 'Error:' . curl_error($ch);
//    }
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //------------------------------
    echo $http_code;
    curl_exec($ch);

    curl_close($ch);

//    fclose($GlobalFileHandle);
}

function curlWriteFile($cp, $data) {
    global $GlobalFileHandle;
//    $len = fwrite($GlobalFileHandle, $data);
//    return $len;
}

saveRemoteFile();