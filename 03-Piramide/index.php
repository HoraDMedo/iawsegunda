<?php

$bienvenido=true;


if(isset($_GET["enviar"])){
    $bienvenido=false;
    header("Refresh:0; url=index.php?numeros=30&enviar=Accion+cerdo");

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

        <h1>Introduce un numero y luego accion ,para que pasen cositas</h1>
        

    <?php } else { ?>

        <h1> Esta es tu piramide de cositas </h1>

    <?php } ?>



    <div style="margin-top:2%;">

        <form action="index.php" method="get">


            <input type="number" name="numeros" value="<?=$_GET["numeros"]?>">

            <input type="submit" name="enviar" value="Accion cerdo">
        </form>



    </div>


    <div style="margin-top:2%;">

            <?php 
            
            if ($bienvenido == false){
            
                $color1=rand(0, 255);
                $color2=rand(0, 255);
                $color3=rand(0, 255);

                $aste="<span style='color:rgb($color1, $color2, $color3);'>*</span>";


                for ($i = 1; $i <= $_GET["numeros"]; $i++) {
                    $color1=rand(0, 255);
                    $color2=rand(0, 255);
                    $color3=rand(0, 255);

            
                   
                    $aste2="<span style='color:rgb($color1, $color2, $color3);'>*</span>";

                    echo "$aste";
                    echo "<br>";
                    $aste = $aste . $aste2;
                }


            }

            
            ?>


    </div>

      <div style="background-color:lightblue; margin-top:2%;" class="perro">



         
     
        <?=$image=($bienvenido == false)? "<img src='https://i.redd.it/x6xjybiem9r61.jpg' alt='' style='width:25%; padding:1%;'>" : "";?>
        <?=$image=($bienvenido == false)? "<img src='https://pbs.twimg.com/ext_tw_video_thumb/1446152175135059970/pu/img/5AYIeAcyZ9zcF5aa.jpg' alt='' style='width:25%; margin-left:10%; padding:1%;'>" : "";?>
     

     </div>



</body>
</html>