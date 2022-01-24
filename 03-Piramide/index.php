<?php

$bienvenido=true;


if(isset($_POST["enviar"])){
    $bienvenido=false;
    $aste="*";
    $aste2="*";
    $image2="<img src='https://i.redd.it/x6xjybiem9r61.jpg' alt='' style='width:25%; margin-left:40%'>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>


    <?php if ($bienvenido) { ?>

        <h1>Introduce un numero y luego accion ,para que pasen cositas</h1>
        

    <?php } else { ?>

        <h1> Esta es tu piramide de cositas </h1>

    <?php } ?>


    <div>

        <form action="index.php" method="POST">


            <input type="number" name="numeros" value="enviar">

            <input type="submit" name="enviar" value="accion">


        </form>



    </div>


    <div>

            <?php 
            
            if ($bienvenido == false){
            
            for ($i = 1; $i <= $_POST["numeros"]; $i++) {
            
            echo $aste2;
            echo "<br>";
            $aste2 = $aste2 . $aste;
            }

            }

            ?>


    </div>



      <div style="background-color:lightblue" class="perro">



            
     
        <?=$image=($bienvenido == false)? "<img src='https://i.redd.it/x6xjybiem9r61.jpg' alt='' style='width:25%; margin-left:38%; padding:1%;'>" : "";?>

    

     </div>



</body>
</html>