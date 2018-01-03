<?php

$token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';

$filename = "ojo.jpg";


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_URL, "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"/index.php\",\"settings\": {\"requested_visibility\": \"public\"}}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Authorization: Bearer " .$token;
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}


echo $result;
curl_close ($ch);