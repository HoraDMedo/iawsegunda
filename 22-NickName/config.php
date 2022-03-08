<?php

session_start();

//include("configuracion.php");

if(isset($_POST["enviar"])) {


    if ($_POST["nombre"] == ""){

        $_SESSION["nom"] = "anonimo";

    }else{
        $_SESSION["nom"] = $_POST["nombre"];

    }

   
    $_SESSION["foto"] = $_POST["foto"];

   

 

}





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
        <h1>Listado de Usuario</h1>
        

        <form action="" method="post">

            <input type="text" name="nombre"> Nombre de Usuario <br><br>
            <input type="text" name="foto"> Url de la foto <br> <br>

            <input type="submit" value="enviar" name="enviar">

        </form>

        <br>
        <a href="./index.php"> Pagina de Index </a>


    </div>
</body>
</html>