
<a href="cerrar-sesion.php">Cerrar sesión</a><br>

<?php
/**
 * Created by PhpStorm.
 * User: d8user
 * Date: 09/12/2017
 * Time: 21:46
 */

session_start();


if (!isset($_SESSION["nombre"])) {
    header("Location:index.php");
}else{
    $nombre = $_SESSION["nombre"];
    echo "hola" . $nombre . " --  " . $_SESSION["nombre"] ;
}
