<?php
$token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';
global $GlobalFileHandle;
set_time_limit(0);
# Open the file for writing...
$filename = "tigre.jpg";
$GlobalFileHandle = fopen($filename, 'w+');


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_URL, "https://content.dropboxapi.com/2/files/download");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Authorization: Bearer " . $token;
$headers[] = "Dropbox-Api-Arg: {\"path\": \"/ojo.jpg\"}";
$headers[] = "Content-Type: application/octet-stream";
//$headers[] = "Content-Type: image/png";
//$headers[] = "Content-Type: application/octet-stream; charset=utf-8";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//curl_setopt($ch, CURLOPT_WRITEFUNCTION, 'curlWriteFile');
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    return "ERROR !!!!";
}
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//echo $result . "<br>";
echo $http_code . "<br>";
curl_close($ch);
fclose($GlobalFileHandle);

$file = $result;




//return 0;
//$img = "http://wiki.metin2.es/images/f/fc/Tigre.png";
//$getInfo = getimagesize($img);
//header('Content-type: ' . $getInfo['mime']);
//readfile($img);




function data_uri($contents, $mime)
{
//    $contents = file_get_contents($file);
    $base64   = base64_encode($contents);
    return ('data:' . $mime . ';base64,' . $base64);
}
//$archivo = "ojo.jpg";
//$archivo = $img;
?>


<img src="<?php echo data_uri($result,'image/png'); ?>" alt="An elephant" />