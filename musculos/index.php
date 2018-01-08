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

$medida = '160';
$height = $medida;
$width = $medida;

$f11 = crearImg($ruta, "cerdo.jpg", $claseF1, $medida, 1);
$f12 = crearImg($ruta, "tigre.jpg", $claseF1, $medida, 2);
$f13 = crearImg($ruta, "ojo.jpg"  , $claseF1, $medida, 3);

$f21 = crearImg($ruta, "cerdo1.jpg", $claseF2, $medida, 1);
$f22 = crearImg($ruta, "tigre1.jpg", "$claseF2", $medida, 2);
$f23 = crearImg($ruta, "ojo1.jpg"  , $claseF2, $medida, 3);

?>


<table class="table tabla1mus col-6">
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
<script src="../libs/bootstrap-3.3.7-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        var classImgSelected = "imgSelected";
        $(".filamus").click(function () {
            var resultLabel = this.parentNode.parentNode.getElementsByTagName("label")[0];
            resultLabel.innerHTML = (this.dataset.puntos);

            var listaImagenesFila = this.parentNode.parentNode.getElementsByTagName("img");
//            listaQuitarClase(listaImagenesFila,classImgSelected);
            listaImagenesFila = Array.from(listaImagenesFila);
            listaImagenesFila.map(img=>img.classList.remove(classImgSelected));
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

        var listaQuitarClase = function(lista,clase){
            for (var i = 0; i < lista.length; i++) {
                var obj = lista[i];
                obj.classList.remove(clase);
            }
        }

    });
</script>

<style>


    .filamus {
        border: .3em solid #eae7ff;
        cursor: pointer;
    }

    .imgSelected {
        border: .3em solid #6191db;
    }





</style>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">














