<?php
/**
 * Created by PhpStorm.
 * User: d8user
 * Date: 09/12/2017
 * Time: 20:01
 */


try {
    $base = new PDO("mysql:host=localhost;dbname=sesiones", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from usuarios WHERE nombre= :nombre AND password= :password";
    $resultado = $base->prepare($sql);
    $nombre = htmlentities(addslashes($_POST["nombre"]));
    $password = htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":nombre", $nombre);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $cantRegistros = $resultado->rowCount();
    $variable = "adios";
//    echo $cantRegistros;
    if ($cantRegistros==1) {
        echo "<h2>Ingresaste correctamente </h2>";

        session_start();
        $_SESSION["nombre"] = $nombre;
        echo "<h3>" . $nombre . "</h3>";

    }else{
        header("location:index.php");
    }
} catch (Exception $e) {
    die("error: " . $e->getMessage());
}

?>

<a href="pagina1.php"></a>
<a href="pagina2.php"></a>
