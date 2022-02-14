<?php

include("contador.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> COOKIES </h1>

<?php if($cadena < 1){  ?>

<h1>Bienvenido</h1>

<?php }else{ ?>

<h1>Llevas <?=$cadena?> Visitas</h1>

<?php } ?>


            <a href="./page2.php"> Pagina 2</a>
            <a href="./page1.php"> Pagina 1</a>


</body>
</html>