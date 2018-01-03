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

<hr>

<form action="procesarimagen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="foto"/>
    <input type="submit" value="Upload">
</form>

</body>
</html>

