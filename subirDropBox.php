<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
    <label for="nombre">Nombre:</label><input type="text" id="nombre" name="nombre">
    <label for="password">Pw::</label><input type="password" id="password" name="password">
    <input type="submit">
</form>

</body>
</html>
<?php
$filename = "ojo.jpg";
$api_url = 'https://content.dropboxapi.com/2/files/upload'; //dropbox api url
$token = 'r-NjLsG5YYIAAAAAAAAAQ4C_O7F7dnqx_XkrSuZwiqapgGAU-bkzNQZZIJiJURjQ';
https://photos-3.dropbox.com/t/2/AADASVS00Vr1eMjfangQ3dIfhudHMCUZHYS3OZdxRqR9vA/12/365218683/jpeg/32x32/1/_/1/2/ojo.jpg/EOCc09kHGIkBIAcoBw/6PFOQ10-nlT5AwO2jTtqUzQtmN38wUY8dqabVS56Nq0?size=2048x1536&size_mode=3

$headers = array(
    'Authorization: Bearer ' . $token,
    'Content-Type: application/octet-stream',
    'Dropbox-API-Arg: ' .
    json_encode(
        array(
            "path" => '/' . basename($filename),
            "mode" => "add",
            "autorename" => true,
            "mute" => false
        )
    )
);

$ch = curl_init($api_url);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);

$path = $filename;
$fp = fopen($path, 'rb');
$filesize = filesize($path);

curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo($response . '<br/>');
echo($http_code . '<br/>');

curl_close($ch);
