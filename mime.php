<?php


/*   - - - -    1  - - - - - - - */

//$img = "http://wiki.metin2.es/images/f/fc/Tigre.png";
//$getInfo = getimagesize($img);
//header('Content-type: ' . $getInfo['mime']);
//readfile($img);
/*   - - - -   fin  1  - - - - - - - */


/*   - - - -    2  - - - - - - - */


function data_uri($file, $mime)
{
    $contents = file_get_contents($file);
    $base64   = base64_encode($contents);
    return ('data:' . $mime . ';base64,' . $base64);
}
$img = "http://wiki.metin2.es/images/f/fc/Tigre.png";
$archivo = "ojo.jpg";
$archivo = $img;
?>


<img src="<?php echo data_uri($archivo,'image/png'); ?>" alt="An elephant" />

<?php
/*   - - - -  fin 2  - - - - - - - */
?>