<?php
session_start();
//include("configuracion.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Listado de cilistas</h1>
    
<div>
Nombre:<?=$_SESSION["nom"]?> <br>
Imagen:<img src="<?=$_SESSION["foto"]?>"/><br>

</div>
<br>
     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse mollitia nisi ut perferendis facere. Necessitatibus iure repudiandae fugiat, dolores dolorem nisi in vitae earum veniam quaerat magnam labore cupiditate nulla.



    </div>
</body>
</html>