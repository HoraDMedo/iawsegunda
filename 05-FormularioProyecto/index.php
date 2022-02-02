<?php

#Declaramos lo errores vacios
$nombre="";
$vuelo="";
$apellido="";
$fecha_e="";
$vuelo_e="";
$correo_e="";


$nombre_e=false;
$apellido_e=false;

if(isset($_POST["enviar"])){

#Guardamos los valores del post cada uno en una variable

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellidos"];
    $fecha_o=$_POST["fecha_salida"];
    $fecha_d=$_POST["fecha_destino"];
    $vuelo=$_POST["transporte"];
    $correo=$_POST["Correo"];
    $posicion = strpos($correo, "@");

    echo $posicion;


    if(strlen($nombre) < 3 || $nombre == "" ){

        $nombre_e=true;

    }

    if(strlen($apellido) < 3 || $apellido == "") {

        $apellido_e=true;

    }

    if($fecha_o > $fecha_d || $fecha_d == "" || $fecha_o == ""){

        $fecha_e=true;
    }

    if($vuelo == "..."){

        $vuelo_e=true;
    }

    if (empty($posicion)) {

      $correo_e=true;
    }  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo.css">

  <title>Formulario Reserva Vuelos</title>

</head>
<body >


<form action="fomulario_resgistro" method="post">
<div class="registro">

<h2>Formulario Reserva Vuelos <?php if($vuelo_e || $fecha_e || $apellido_e || $nombre_e || $correo_e) echo "<h2 class='errorh2'> Rellena o Modifica los campos Necesarios, por favor</h2>"?></h2>

</input type="text" name="nombrecito" class="nombre">

<h4></h4>

    <div>
    <h4>Nombre<h4>
    <input type="text" placeholder="Pepe" name="nombre" <?=$clase=($nombre_e)?'class="user_namee"':'class="user_name"'?> value="<?=$nombre?>"></input>
    </div>

    <div>
    <h4>Apellidos<h4>
    <input type="text" name="apellidos" placeholder="Perez Lopez" <?=$clase2=($apellido_e)?'class="user_namee"':'class="user_name"'?> value="<?=$apellido?>"></input>
    </div>

    <div>
    <h4>Correo<h4>
    <input type="text" name="Correo" placeholder="pepito@gmail.com" <?=$clase6=($correo_e)?'class="user_namee"':'class="user_name"'?> value="<?=$correo?>"></input>
    </div>

    <div>
    <h4>Fecha Origen<h4>
    <input type="date" name="fecha_salida" <?=$clase3=($fecha_e)?'class="user_namee"':'class="user_name"'?> value="<?=$fecha_o?>"> </input>
    </div>

    <div>
    <h4>Fecha Destino<h4>
    <input type="date" name="fecha_destino" <?=$clase4=($fecha_e)?'class="user_namee"':'class="user_name"'?> value="<?=$fecha_d?>"></input>
    </div>

    <div>
    <h4>Selecciona compañia<h4>

    <select name="transporte" value="123" <?=$clase5=($vuelo_e)?'class="user_namee"':'class="user_name"'?> value="<?=$_POST["transporte"]?>">

            <option <?php if($vuelo == "") echo "selected"?>> ... </option>

            <option <?php if($vuelo == "Ryanair") echo "selected"?> >Ryanair </option>

            <option <?php if($vuelo == "Iberia") echo "selected"?>>Iberia </option>

            <option <?php if($vuelo == "Air Europa") echo "selected"?>>Air Europa</option>

            <option <?php if($vuelo == "Vueling Airlines"){ echo "selected";}?>>Vueling Airlines</option>

    </select>
    </div>


  <input class="boton" type="submit" name="enviar" value="Enviar Formulario">
  


</div>  
</form>


</body>
</html>