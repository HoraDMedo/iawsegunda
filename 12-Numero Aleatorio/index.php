<?php

session_start();


$final="";


if (isset($_SESSION["numerito"])){

        if ($_POST["num"] == $_SESSION["numerito"]){
            $final="<h3>Correcto Has adivinado el numero</h3>";
            $img="<img src='https://acegif.com/wp-content/gif/confetti-12.gif' alt='Girl in a jacket' width='500' height='600'>";
        }

        if ($_POST["num"] < $_SESSION["numerito"]){
            $final="<h3>Un poquito mas</h3>";
            $_SESSION["cont"] = $_SESSION["cont"] + 1;
        }

        if ($_POST["num"] > $_SESSION["numerito"]){
            $final="<h3>Un poquito menos</h3>";
            $_SESSION["cont"] = $_SESSION["cont"] + 1;
          
        }
}

        if (!$_SESSION["numerito"]){

            $_SESSION["numerito"] = rand(0,10);
            
            $_SESSION["cont"] = 0;
        }

       if ($_POST["reiniciar"]){

        $_SESSION["cont"] = 0;
        $_SESSION["numerito"]=rand(0,10);

       }
       
        print_r($_SESSION["numerito"]);
        echo "<br>";
        print_r($cont);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-left:10%;">
    
<h1>Hola buenas Dime un numero</h1>
<h2>Numero entre el 1 y el 10</h2>
<form action="index.php" method="post" style="margin-left:10%;">
    <input type="number" name="num" max="10" min="0">
    <input type="submit" name="enviar">
    <br><br>
    <label>Contandor de intentos</label>
    <input type="submit" name="reiniciar" value="reiniciar contador y num">
    <input type="text" size="2" value="<?=$_SESSION["cont"]?>">
    <?=$final?>
    <?=$img?>

</form>




</body>
</html>