
<?php

copy($_FILES["foto"]['tmp_name'],$_FILES["foto"]['name']);
echo "archivo subido";
$nombre = $_FILES["foto"]['name'];
$nolegible = file_get_contents($nombre);


//$img = 'http://images.itracki.com/2011/06/favicon.png';
$img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ26t16fzGem3rdNR1caAYh9G7Z5GM0__X--Sj3wols0z0KERsj';
//$img = g
$getInfo = getimagesize($img);
header('Content-type: ' . $getInfo['mime']);
readfile($img);



//echo "<img src=\"$nombre\">";
