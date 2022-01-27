<?php

$bienvenido=true;


if(isset($_POST["enviar"])){
    $bienvenido=false;
   
    $numeros = $_POST["numeros"];
    $colorcito = $_POST["color"];


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
<body align="center">


    <?php if ($bienvenido) { ?>

        <h1>Introduce un numero y un color y luego accion ,para que pasen cositas</h1>
        

    <?php } else { ?>

        <h1> Esta es tu piramide del color y longitud indicada </h1>

    <?php } ?>



    <div style="margin-top:2%;">

        <form action="index.php" method="POST">


            <input type="number" name="numeros" value="<?=$numeros?>">
            <br>
            <br>
            <input type="color" name="color" value="<?=$colorcito?>">
            <br>
            <br>
            <input type="submit" name="enviar" value="accion">
            <br>
        </form>



    </div>


    <div style="margin-top:2%;">

            <?php 
            




            if ($bienvenido == false){

        

                $aste="<span style='color:$colorcito';>*</span>";


                for ($i = 1; $i <= $_POST["numeros"]; $i++) {
          
                    $aste2="<span style='color:$colorcito';>*</span>";

                    echo "$aste";
                    echo "<br>";
                    $aste = $aste . $aste2;
                }


            }

            
            ?>


    </div>



      <div style="background-color:lightblue; margin-top:2% float;" class="perro">


      <?=$image=($bienvenido == false)? "<img src='https://i.redd.it/x6xjybiem9r61.jpg' alt='' style='width:25%; margin-left:15%; padding:1%; float'>" : "";?>
      <?=$image=($bienvenido == false)? "<img src='https://pbs.twimg.com/ext_tw_video_thumb/1446152175135059970/pu/img/5AYIeAcyZ9zcF5aa.jpg' alt='' style='width:25%; margin-left:15%; padding:1%; floa'>" : "";?>
     

     </div>



</body>
</html>