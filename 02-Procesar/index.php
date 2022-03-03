<?php

$bienvenido=true;
$nombre="";
$segundonombre="";
$edad="";
$edad_20_39="";
$edad_40_59="";
$edad_60_79="";

$error=false;
$error_nombre=false;
$error_apellido=false;
$error_edad=false;




if(isset($_POST["enviar"])){
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $segundonombre=$_POST["apellidos"];

    if ($_POST["nombre"] == "" || strlen($_POST["nombre"]) < 3 ){
        $error_nombre=true;
        $error=true;
        }
    
    if ($_POST["apellidos"] == "" || strlen($_POST["apellidos"]) < 3 ){
        $error_apellido=true;
        $error=true;
        }

    if ($_POST["edad"] == ""){
        $error_edad=true;
        $error=true;
     
        }


    
    
}


if(isset($_POST["enviar"])){

    $edad_20_39=($_POST["edad"]=="20-39")?"checked":"";
    $edad_40_59=($_POST["edad"]=="40-59")?"checked":"";
    $edad_60_79=($_POST["edad"]=="60-79")?"checked":"";


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
    <link rel="stylesheet" href="./estilo.css">
    <title>Formulario</title>
</head>
<body>

    <?php if ($bienvenido) { ?>

        <h1>Bienvenido!!!</h1>
        

    <?php } ?>

<?php if ($error){ ?>
    
    <div class="error"> 
        <h1>Los datos introducidos tienen un error</h1>
    </div>

  <?php  } ?>


    <div>


        <form action="index.php" method="POST">


            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre" <?php if ($error_nombre) echo 'class="erronom"' ?>>Nombre:</label>
                <input name="nombre" <?php if ($error_nombre) echo 'class="fondo"'?> id="nombre" type="text" tabindex="1" value="<?=$nombre?>"/>
               
                <label for="apellidos" <?php if ($error_apellido) echo 'class="errorape"'?> >Apellidos</label>
                <input name="apellidos" <?php if ($error_apellido) echo 'class="fondo"'?> id="apellidos" type="text" tabindex="2" value="<?=$segundonombre?>"/>
            </fieldset>

            <fieldset <?php if($error_edad) echo 'class="erroredad"' ?>>
                                
            
            <legend>Edad</legend>

        
                
                <label><input type="radio" value="20-39" <?=$edad_20_39?> name="edad"/>20-39</label>
                <label><input type="radio" tabindex="21"  value="40-59" <?=$edad_40_59?> name="edad" /> 40-59</label>
                <label><input type="radio" tabindex="22" value="60-79" <?=$edad_60_79?> name="edad" /> 60-79</label>




            </fieldset>

            <input type="submit" name="enviar" value="enviar">


        </form>


      
    
    </div>



        <!--
        <div>
               /* 
            <?=$image=($bienvenido == false)? "<img src='data:image/jpeg;base64,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' style='width:25%; margin-left:40%;'>":"" ?>
                */
        </div>
        -->
</body>
</html>