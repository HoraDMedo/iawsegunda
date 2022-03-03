<?php
#Crea una página index.php con 3 imágenes: una pera, una manzana y un melocotón.

#Cada imagen será un enlace a la página:
#index.php?add=pera
#index.php?add=manzana
#index.php?add=melocotón

#Si no hay nada en el GET se mostrará un mensaje de bienvenido al selector de frutas
#Si se ha pulsado en alguna se mostrará:
#Gracias por elegir Pera|Manzana|Melocotón

#Si el parámetro no es alguno de estos se mostrará:
#Fruta no reconocida
$valor="";
$valor2="";
$valor3="";

if ($_GET["manolo"] =="pera"){
    $valor="<h1>Has elegido peras</h1>";

}

if ($_GET["manolo"] =="manzana"){
    $valor2="<h1>Has elegido manzanas</h1>";

}
if ($_GET["manolo"] =="melocoton"){
    $valor3="<h1>Has elegido melocoton</h1>";

}






?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="./js.js"></script>
    </head>

        <body align="center">

        <div>


           <a href="index.php?manolo=pera" name="pera"> <img src="./descarga.jpeg" alt=""></a>

           <?=$valor?>
           <?=$valor2?>
           <?=$valor3?>

           <a href="index.php?manolo=manzana"> <img src="./manzana.jpg" width="20%" alt=""></a>
           <a href="index.php?manolo=melocoton"> <img src="./melocoton.jpg" alt=""></a>


           





        </div>

     

        </body>
</html>


