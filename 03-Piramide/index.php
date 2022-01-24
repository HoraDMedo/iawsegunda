<?php

if (isset($_POST["enviar"])){

$iniciar="true";
$asta="*";
}






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
    
    <h1>Piramide de Asteriscos</h1>



<div>


 <form action="index.php" method="POST">


        
            <input type="number" name="numeros" value="enviar">
            <input type="submit" name="enviar" value="ACCION">


</form>

 </div>

        <div>

            <?php for($i=0;$i < $_POST["numeros"];$i++){
                
                
             
                


            }?>

                  

                




        </div>


</body>
</html>