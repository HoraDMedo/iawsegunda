<?php

$bienvenido=true;
$nombre="";
$edad="";


if(isset($_POST["enviar"])){
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $segundonombre=$_POST["apellidos"];
    $edad=$_POST["edad"];
}


#echo "GET:<br>";
#print_r($_GET);
#echo "<br>";

#echo "POST:<br>";
#print_r($_POST);
#echo "<br>";

#echo "COOKIES:<br>";
#print_r($_COOKIES);
#echo "<br>";

#echo "SESSION:<br>";
#print_r($_SESSION);
#echo "<br>";

#echo "SERVER:<br>";
#print_r($_SERVER);
#echo "<br>";
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

        <h1>Bienvenido!!!</h1>
        

    <?php } ?>


    <div>

        <form action="index.php" method="POST">


            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" value="<?php echo $nombre ;?>"/>
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" value="<?php echo $segundonombre ;?>"/>
            </fieldset>

            <fieldset>
                <legend>Edad</legend>

        

                <label><input type="radio" tabindex="20"  

                <?php if ($edad == "20-39"){ ?>
                
                        checked

                 <?php }?>

                 value="20-39" name="edad"/>20-39</label>




                <label><input type="radio" tabindex="21"
                
                <?php if ($edad == "40-59"){ ?>
                
                     checked

                <?php }?>

                value="40-59" name="edad" /> 40-59</label>




                <label><input type="radio" tabindex="22"
            
                <?php if ($edad == "60-79"){ ?> 
                    checked
                <?php }?>
                
                value="60-79" name="edad" /> 60-79</label>




            </fieldset>
<br>

            <input type="submit" name="enviar" value="enviar">

        </form>
    </div>
</body>
</html>