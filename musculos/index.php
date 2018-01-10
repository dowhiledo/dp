<?php

$VAL_EXCELENTE = 1;
$VAL_MEDIO = 2;
$VAL_POBRE = 3;

//$ruta = "/imagenes/cerdo.jpg";
//$ruta0 = "../imagenes/";
//$nombre = "cerdo.jpg";


function crearImg($ruta, $nombreImg, $clase, $ancho, $alto, $puntos) {
    $src = $ruta . "/" . $nombreImg;
    $tagImg = "<img src=$src class=$clase width=$ancho height=$alto data-puntos=$puntos>";
    return $tagImg;
}

$ruta= "../imagenesEvaluacion/";
$ficheros  = scandir(dirname(__DIR__) ."/imagenesEvaluacion");

//echo "<pre>";
//print_r($ficheros);
$iImg=3;
//print_r($ficheros[3]);
//echo "</pre>";

$claseFilaImg = "imgMuscEsc";
$medida = '160';
$height = $medida;
$width = $medida;

//$f11 = crearImg($ruta0, "cerdo.jpg", $claseFilaImg, $medida,$medida, 1);
$f11 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
$f12 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
$f13 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);
$f14 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 4);

$f21 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
$f22 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
$f23 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);
$f24 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 4);

$f31 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
$f32 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
$f33 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);
$f34 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 4);

$f41 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
$f42 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
$f43 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);
$f44 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 4);
?>


<form id="form" action="#" method="post">
    <div class="col-md-12">
        <!-------------------- INICIO TABLA 1------------------->
        <h4>APTITUD DE ESPALDA</h4>
        <table class="table table-bordered tablaMuscEsc tablaMuscEsc1 ">
            <thead>
            <tr>
                <th class="col-md-1"></th>
                <th class="col-md-2">Excelente: 1</th>
                <th class="col-md-2">Promedio: 2</th>
                <th class="col-md-2">Regular: 3</th>
                <th class="col-md-2">Pobre: 4</th>
                <th class="col-md-1">Puntos</th>
                <th class="col-md-2">Observaciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">Flexibilidad Fuerza/ABDOMEN</td>
                <td><?php echo $f11 ?></td>
                <td><?php echo $f12 ?></td>
                <td><?php echo $f13 ?></td>
                <td><?php echo $f14 ?></td>
                <td class="text-center"><input type="text" class="ptsFila" name="ptsFlexFuerzaAb" readonly value=0></td>
                <td rowspan="4">
                    <textarea name="observacionesTabla1" id="observacionesTab1" rows="25"></textarea>
                </td>
            </tr>

            <tr>
                <td>CADERA</td>
                <td><?php echo $f21 ?></td>
                <td><?php echo $f22 ?></td>
                <td><?php echo $f23 ?></td>
                <td><?php echo $f24 ?></td>
                <td class="text-center"><input type="text" class="ptsFila" name="ptsCadera" readonly value=0></td>
            </tr>

            <tr>
                <td>MUSLO</td>
                <td><?php echo $f31 ?></td>
                <td><?php echo $f32 ?></td>
                <td><?php echo $f33 ?></td>
                <td><?php echo $f34 ?></td>
                <td class="text-center"><input type="text" class="ptsFila" name="ptsCadera" readonly value=0></td>
            </tr>

            <tr>
                <td>ABDOMEN LATERAL</td>
                <td><?php echo $f41 ?></td>
                <td><?php echo $f42 ?></td>
                <td><?php echo $f43 ?></td>
                <td><?php echo $f44 ?></td>
                <td class="text-center"><input type="text" class="ptsFila" name="ptsCadera" readonly value=0></td>
            </tr>

            <tr>
                <td colspan=5 class="text-right">
                    TOTAL
                </td>
                <td colspan=1 class="text-center">
                    <input type="text" id="ptsTotalTab1" class="resultTotalTab resultTotalTab2" name="ptsTotalTab1" readonly value=0>
                </td>
            </tr>
            </tbody>
        </table>
        <!-------------------- FIN TABLA 1 ------------------->

    <?php
    //imagenes para tabla 2
    $f11 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
    $f12 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
    $f13 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);

    $f21 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
    $f22 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
    $f23 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);

    $f31 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
    $f32 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
    $f33 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);

    $f41 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 1);
    $f42 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 2);
    $f43 = crearImg($ruta, $ficheros[$iImg++], $claseFilaImg, $width,$height, 3);
    ?>
    <!-------------------- INICIO TABLA 2 ------------------->
        <table class="table table-bordered tablaMuscEsc tablaMuscEsc2">
            <thead>
            <tr>
                <th class="col-md-3">RANGOS ARTICULARES</th>
                <th class="col-md-2">Óptimo:1</th>
                <th class="col-md-2">Limitado:2</th>
                <th class="col-md-2">Muy Limitado:3</th>
                <th class="col-md-1">Puntos.</th>
                <th class="col-md-2">Dolor contra resistencia**<br> Si / No </th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>Abducción de hombro (Normal 0° - 180°)</td>
                <td><?php echo $f11 ?></td>
                <td><?php echo $f12 ?></td>
                <td><?php echo $f13 ?></td>
                <td class="text-center"><input type=text class="ptsFila" name="abHombro180" value="0" readonly ></td>
                <td>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default active focus">
                            <input type="radio" name="rbtnAbHombre180" value="1" checked/> Si
                        </label>
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnAbHombre180" value="0"/> No
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Abducción de hombro (Normal 0° - 60°)</td>
                <td><?php echo $f21 ?></td>
                <td><?php echo $f22 ?></td>
                <td><?php echo $f23 ?></td>

                <td class="text-center"><input type=text class="ptsFila" name="abHombro60" value="0" readonly ></td>
                <td>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnAbHombre60" value="1"/> Si
                        </label>
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnAbHombre60" value="0"/> No
                        </label>
                    </div>
                </td>
            </tr>


            <tr>
                <td>Rotación externa (0°-90°)</td>
                <td><?php echo $f31 ?></td>
                <td><?php echo $f32 ?></td>
                <td><?php echo $f33 ?></td>

                <td class="text-center"><input type=text class="ptsFila" name="abHombro60" value="0" readonly ></td>
                <td>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnRotExt90" value="1"/> Si
                        </label>
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnRotExt90" value="0"/> No
                        </label>
                    </div>
                </td>
            </tr>


            <tr>
                <td>Rotación externa de hombro(interna)</td>
                <td><?php echo $f41 ?></td>
                <td><?php echo $f42 ?></td>
                <td><?php echo $f43 ?></td>

                <td class="text-center"><input type=text class="ptsFila" name="abHombro60" value="0" readonly ></td>
                <td>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnRotExtHombInt" value="1"/> Si
                        </label>
                        <label class="btn btn-default">
                            <input type="radio" name="rbtnRotExtHombInt" value="0"/> No
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">OBSERVACIONES</td>
                <td class="text-right">
                    TOTAL
                </td>
                <td colspan=1 class="text-center">
                    <input type="text" id="ptsTotalTab2" class="resultTotalTab resultTotalTab2" name="ptsTotalTab2" readonly value="0">
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <textarea name="observacionesTabla2" id="observacionesTab2" rows="3"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
        <!-------------------- FIN TABLA 2 ------------------->
        <p class="">
            * En puntos colocar el grado que corresponde a la capacidad del paciente,<br>
            ** Repetir cada movimiento contra resistencia leve a moderada y evaluar fortaleza y presencia de dolor.
        </p>

        <input type="button" id="btnJSON" class="btn btn-primary" value="Guardar">
        <pre>
            <div id="muestraJSON"></div>
        </pre>

    </div>
</form>

<!------------------------ script   ---------------------------------------->
<script src="../libs/jquery321.js"></script>
<script src="../libs/bootstrap-3.3.7-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {


        var classImgSelected = "imgSelected";
        var classPtsFila = "ptsFila"; //puntos de c/fila para cualquier tabla
        var classResultTotalTab = "resultTotalTab";
        var classImgMusc = "imgMuscEsc";

        $("#btnJSON").click(function(){
            var formData = ($("#form").serializeArray());
            var muestraJON = document.getElementById("muestraJSON");
            muestraJSON.innerHTML = JSON.stringify(formData,null,2) + "<br>" ;
            console.log(formData);
        });

        $(".imgMuscEsc").click(function () {

            var row = this.parentNode.parentNode;
            var tbody = row.parentNode;
            var resultLabelFila = row.getElementsByClassName(classPtsFila)[0];
            resultLabelFila.value = (this.dataset.puntos);

            $(resultLabelFila).animate({opacity: '0.2'}, "fast");
            $(resultLabelFila).animate({opacity: '1'}, "fast");

            // quita clase imgSelected a fila actual y
            // la agrega a imagen actual
            var listImagenesFila = row.getElementsByClassName(classImgMusc);
            Array.from(listImagenesFila).map(img=>img.classList.remove(classImgSelected));
//            for (var i = 0; i < listImagenesFila.length; i++) {
//                var obj = listImagenesFila[i];
//                obj.classList.remove(classImgSelected);
//            }
            this.classList.add(classImgSelected);

            // puntos totales de tabla actual
            var resultTotalTab = tbody.getElementsByClassName(classResultTotalTab)[0];
            $(resultTotalTab).animate({opacity: '0.2'}, "fast");
            $(resultTotalTab).animate({opacity: '1'}, "fast");
            var suma = calcularPuntos(tbody);
            resultTotalTab.value=suma;
        });

        var calcularPuntos = function (nodo) {
            var lista = nodo.getElementsByClassName(classPtsFila);
            var suma = 0;
            // suma los puntos de las filas de la tabla actual
            for (var i = 0; i < lista.length; i++) {
                var n = parseInt(lista[i].value,10);
                suma += n;
            }
            return suma;
        };

    });
</script>

<style>
    .imgMuscEsc {
        border: .4em solid #e6f5ff;
        cursor: pointer;
    }

    .imgSelected {
        border: .4em solid #6191db;
    }

    .tablaMuscEsc td, .tablaMuscEsc thead th{
        /*background-color: aqua;*/
        text-align: center;
        vertical-align: middle !important;
    }

    .tablaMuscEsc tr td > input{
        text-align: center;
        background-color: #d9eeff;
        border: 1px solid #acd7ee;
        border-radius: .5em;
        width: 3em;
    }


    .tablaMuscEsc td textarea {
        margin:0;
        width: 100%;
    }





</style>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">






