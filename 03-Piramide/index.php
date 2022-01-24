<?php

$bienvenido=true;


if(isset($_POST["enviar"])){
    $bienvenido=false;
    
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

        <h1 style="margin-left:40%;">Introduce un numero y luego accion ,para que pasen cositas</h1>
        

    <?php } else { ?>

        <h1 style="margin-left:40%;"> Esta es tu piramide de cositas </h1>

    <?php } ?>


    <div style="margin-top:2%; margin-left:40%;">

        <form action="index.php" method="POST">


            <input type="number" name="numeros" value="enviar">

            <input type="submit" name="enviar" value="accion">


        </form>



    </div>


    <div style="margin-top:2%; margin-left:40%;">

            <?php 
            
            if ($bienvenido == false){
            
                $color1=rand(0, 255);
                $color2=rand(0, 255);
                $color3=rand(0, 255);

                $aste2="<span style='color:rgb($color1, $color2, $color3)';>*</span>";


            for ($i = 1; $i <= $_POST["numeros"]; $i++) {
            $color1=rand(0, 255);
            $color2=rand(0, 255);
            $color3=rand(0, 255);
              
            $aste="<span style='color:rgb($color1, $color2, $color3)';>*</span>";


            echo "$aste2";
            echo "<br>";
            $aste2 = $aste2 . $aste;
             }


                                     }

            
            ?>


    </div>



      <div style="background-color:lightblue; margin-top:2%;" class="perro">



         
     
        <?=$image=($bienvenido == false)? "<img src='https://i.redd.it/x6xjybiem9r61.jpg' alt='' style='width:25%; margin-left:38%; padding:1%;'>" : "";?>

    

     </div>



</body>
</html>