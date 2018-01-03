<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php
$GlobalFileHandle = null;
function curlWriteFile($cp, $data) {
    global $GlobalFileHandle;
    $len = fwrite($GlobalFileHandle, $data);
//    var_dump($GlobalFileHandle);
//    echo "<br>";
//    echo $len;
//    echo "<br>";
//    echo ".....................";
//    echo "<br>";
//    echo "una vez" . "<br>";
    return $len;
}


$token = 'r-NjLsG5YYIAAAAAAAAAYvrfxSsdVfyPoEY_iZ-pE649jfpF7Z2r3BuFxChBJ9BZ';
global $GlobalFileHandle;
set_time_limit(0);
# Open the file for writing...
$filename = "hola.jpg";
$GlobalFileHandle = fopen($filename, 'w+');


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_URL, "https://content.dropboxapi.com/2/files/download");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Authorization: Bearer " . $token;
$headers[] = "Dropbox-Api-Arg: {\"path\": \"/ojo.jpg\"}";
//$headers[] = "Content-Type: application/octet-stream";
$headers[] = "Content-Type: image/png";
$headers[] = "Content-Type: application/octet-stream; charset=utf-8";
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


function encode64($file) {
    $binary = fread(fopen($file, "r"), filesize($file));
    return (base64_encode($binary));
}

echo "----------------------------------------------------------------------------------------------------------------------------------------- <br>";
//echo '<img src="data:image/bmp;base64,' . encode64($file) . '"/>';
echo "----------------------------------------------------------------------------------------------------------------------------------------- <br>";

//return 0;
//$file_array = explode("\n\r", $file, 2);
//$header_array = explode("\n", $file_array[0]);
//foreach($header_array as $header_value) {
//    $header_pieces = explode(':', $header_value);
//    if(count($header_pieces) == 2) {
//        $headers[$header_pieces[0]] = trim($header_pieces[1]);
//    }
//}
//header('Content-type: ' . $headers['Content-Type']);
//header('Content-Disposition: ' . $headers['Content-Disposition']);
//echo substr($file_array[1], 1);


?>
</body>
</html>

