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

$f11 = crearImg($ruta, "cerdo.jpg", "fila1", 50, 1);
$f12 = crearImg($ruta, "tigre.jpg", "fila1", 50, 2);
$f13 = crearImg($ruta, "ojo.jpg", "fila1", 50, 3);

$f21 = crearImg($ruta, "cerdo1.jpg", "fila2", 50, 1);
$f22 = crearImg($ruta, "tigre1.jpg", "fila2", 50, 2);
$f23 = crearImg($ruta, "ojo1.jpg", "fila2", 50, 3);

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
        <td><label for="" id="ptsFila1">0</label></td>
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
        var imgFila1Selected = 1;

        var fila1 = $(".fila1");
        var fila2 = $(".fila2");


        $(".fila1").click(function () {
            $("#ptsFila1").text(this.dataset.puntos);
            $('.fila1').find('*').addClass('fila11');
            //this.classList.add("fila11");
            actualizarSuma();
        });

        $(".fila2").click(function () {
            $("#ptsFila2").text(this.dataset.puntos);

            // quitar selección
            $('.fila2').each(function () {
                $(this).removeClass("fila11");
            });
            // poner selección
            this.classList.add("fila11");
            actualizarSuma();
        });

        var actualizarSuma = function () {
            var valFila1 = parseInt($("#ptsFila1").text(), 10);
            var valFila2 = parseInt($("#ptsFila2").text(), 10);
            var suma = valFila1 + valFila2;
            $("#ptsTotal").text(suma);
        }
    });
</script>

<style>
    .fila11 {
        border: 2px solid #6191db;
    }



</style>


