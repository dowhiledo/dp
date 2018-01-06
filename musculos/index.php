<?php

$VAL_EXCELENTE = 1;
$VAL_MEDIO = 2;
$VAL_POBRE = 3;

//$ruta = "/imagenes/cerdo.jpg";
$ruta = "../imagenes/";
$nombre = "cerdo.jpg";


function crearImg($ruta, $nombre, $clase, $dim, $puntos) {
    $src = $ruta . "/" . $nombre;
    $tagImg = "<img src=$src class=$clase width=$dim height=$dim data-puntos=$puntos>";
    return $tagImg;
}

$claseF1 = "filamus fila1";
$claseF2 = "filamus fila2";
$f11 = crearImg($ruta, "cerdo.jpg", $claseF1, 50, 1);
$f12 = crearImg($ruta, "tigre.jpg", $claseF1, 50, 2);
$f13 = crearImg($ruta, "ojo.jpg"  , $claseF1, 50, 3);

$f21 = crearImg($ruta, "cerdo1.jpg", $claseF2, 50, 1);
$f22 = crearImg($ruta, "tigre1.jpg", "$claseF2", 50, 2);
$f23 = crearImg($ruta, "ojo1.jpg"  , $claseF2, 50, 3);

?>


<table class="table tabla1mus">
    <thead>
    <tr>
        <th>Row</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>musculos</td>
        <td><?php echo $f11 ?></td>
        <td><?php echo $f12 ?></td>
        <td><?php echo $f13 ?></td>
        <td><label id="ptsFila1">0</label></td>
    </tr>
    <tr>
        <td>musculos</td>
        <td><?php echo $f21 ?></td>
        <td><?php echo $f22 ?></td>
        <td><?php echo $f23 ?></td>
        <td><label for="" id="ptsFila2">0</label></td>
    </tr>
    <tr>
        <td>
            <label for="" id="ptsTotal">0</label>
        </td>
    </tr>

    </tbody>
</table>
<!------------------------ script   ---------------------------------------->
<script src="../libs/jquery321.js"></script>
<script>
    $(document).ready(function () {

        var classImgSelected = "imgSelected";
        $(".filamus").click(function () {
            var resultLabel = this.parentNode.parentNode.getElementsByTagName("label")[0];
            resultLabel.innerHTML = (this.dataset.puntos);

            var listImagenesFila = this.parentNode.parentNode.getElementsByTagName("img");
            for (var i = 0; i < listImagenesFila.length; i++) {
                var obj = listImagenesFila[i];
                obj.classList.remove(classImgSelected);
            }
            this.classList.add(classImgSelected);
            actualizarSuma();
        });
//

        var actualizarSuma = function () {
            var valFila1 = parseInt($("#ptsFila1").text(), 10);
            var valFila2 = parseInt($("#ptsFila2").text(), 10);
            var suma = valFila1 + valFila2;
            $("#ptsTotal").text(suma);
        }
    });
</script>

<style>

    table td .imgSelected {
        border: 2px solid #6191db;
    }

    table .filamus {
        border: 2px solid transparent;
    }






</style>


