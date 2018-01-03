<?php


$token = "r-NjLsG5YYIAAAAAAAAAjb6dYOt73IlVRDl_pxqAZqIh2HXpRvljOMCiFFVez9Gx";
$nombreArchivo = "tigre.jpg";

$rutaFuente = "";
$nombreArchivoFuente = $nombreArchivo;
$pathFuente = $rutaFuente . $nombreArchivoFuente;


$rutaDestino = "/aaaaa/";
$nombreArchivoDestino = $nombreArchivo;
$pathDestino = $rutaDestino . $nombreArchivoDestino;

// JSON devuelto despues de subir la imagen
$responseJSONUpload = uploadToDropBox($pathFuente,$pathDestino,$token);
pre($responseJSONUpload);
$idDevuelto = $responseJSONUpload["id"]; // guardar este ID en la base de datos
$pathDevuelto = $responseJSONUpload["path_display"]; // guardar el path en la BD

$responseJSONCrearLink = crearLinkByPath($idDevuelto,$token);
pre($responseJSONCrearLink);
$link = $responseJSONCrearLink["url"];

$link = convertirLink0a1($link);
echo "<img src=" . $link . " alt=''>";



function uploadToDropBox($pathFuente,$pathDestino,$token) {

    $headers = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/octet-stream',
        'Dropbox-API-Arg: ' .
        json_encode(
            array(
//            "path" => '/' . basename($filename),
                "path" => $pathDestino,
                "mode" => "add",
                "autorename" => true,
                "mute" => false
            )
        )
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://content.dropboxapi.com/2/files/upload");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);


    $fp = fopen($pathFuente, 'rb');
    if ($fp == FALSE) {
        echo "Error al intentar abrir el fichero <br>";
        return;
    }
    $filesize = filesize($pathFuente);
    if ($filesize == FALSE) {
        echo "Error: filesize() <br>";
        return;
    }


    curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $responseJSON = json_decode($response, true);
    curl_close($ch);

    return $responseJSON;

}

function crearLinkByPath($path, $token) {

    p("--------------- CREAR LINK ------------- ");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_URL, "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"/" . $filename . "\",\"settings\": {\"requested_visibility\": \"public\"}}");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"" . $path . "\",\"settings\": {\"requested_visibility\": \"public\"}}");
    curl_setopt($ch, CURLOPT_POST, 1);

    $headers = array();
    $headers[] = "Authorization: Bearer " . $token;
    $headers[] = "Content-Type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $responseJSON = json_decode($response, true);


    $claveError = "error_summary";
    // en caso haya un error, que lo imprima.
    if (array_key_exists($claveError, $responseJSON)) {
        $errorValue = $responseJSON[$claveError];
        echo "Error: [" . $claveError . "] => " . $errorValue;
        return;
    }

    // si size es 0, el archivo se ha subido mal
    if ($responseJSON["size"] == 0) {
        echo "Error: Archivo en Dropbox con size:0" . "<br>";
        return;
    }

    if (!array_key_exists('url', $responseJSON)) {
        echo "Error: No hay url";
        return;
    }

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }


    return $responseJSON;
}

function convertirLink0a1($link){
    $link = substr($link, 0, -1) . "1";
    return $link;
}




//  --------------- FUNCIONES ------------------------------------------//
function salto() {
    echo "<br>";
}

function pre($obj) {
    echo "<pre>";
    print_r($obj);
//    var_dump($obj);
    echo "</pre>";
}

function p($param) {
    echo $param;
    echo "<br>";
}

?>