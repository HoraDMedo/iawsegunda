<?php 

session_start();


if(isset($_POST["enviar"])) { 

        $mensaje="Falta este campo";
        $checked="checked";
        $tomate="class='mal'";
        $tomate2="";

        if ($_POST["urgente"] == ""){
        $tomate2="class='mal2'";
             
        }else{
        $urgente=$_POST["urgente"];
        }

       

      

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body align="center">
        <h1>Reparación informática</h1>


    <form action="" method="post">

        <h4>Nombre Averia</h4>
        <input type="text" placeholder="Samuel, diego..." <?php if ($_POST["texto"] == "") {echo $tomate; } ?>  value="<?=$_POST["texto"]?>" name="texto">
        <br><?php if ($_POST["texto"] == "") {echo $mensaje; } ?><br>

        <h4>Descripcion Averia</h4>
        <input type="text" placeholder="Se ma roto el pc" <?php if ($_POST["desc"] == "") {echo $tomate; } ?> value="<?=$_POST["desc"]?>" name="desc">
        <br><?php if ($_POST["desc"] == "") {echo $mensaje; } ?><br><br>

        <h4>Urgente</h4>
    
        <div <?=$tomate2?>>
            <input type="radio" <?=$tomate2?> <?php if ($_POST["urgente"] == "si") {echo $checked; } ?> name="urgente" value="si" id=""> Si
            <input type="radio" <?=$tomate2?> <?php if ($_POST["urgente"] == "no") {echo $checked; } ?> name="urgente" value="no" id=""> No
        </div>
            <br><br> <?php if ($_POST["urgente"] == "") {echo $mensaje; } ?><br><br><br>
        

        <input type="submit" value="enviar" name="enviar"><br>

    </form>

    <?php

     if ($_POST["texto"] != ""  && $_POST["desc"] != "" && $_POST["urgente"] != "" ){
        
        $tecnico="un técnico le contactará";

    }
    
    
    ?>
    <h1><?=$tecnico?></h1>

</body>
</html>