<?php
session_start();
//include("configuracion.php");

if(isset($_POST["enviar"])){

    if(($_POST["numeros"] % 2) == 0){

      
        echo "Tu numero NO es primo";
    }else{
        echo "Tu numero es primo";

        $_SESSION["contador"] = $_SESSION["contador"] + 1;
        
    }

}

if (!isset($_SESSION["contador"])){

    $_SESSION["contador"] = 0;

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
        <h1>Listado de cilistas</h1>
    
<div>
    <form method="post">

        <input type="number" name="numeros" id="">
        <input type="submit" name="enviar" value="Comprobar"><br>
        Contador primos: <?=$_SESSION["contador"]?>
    
    </form>


</div>
<br>
    


    </div>
</body>

</html>