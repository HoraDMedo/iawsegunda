<?php

session_start();

echo "primero<br>";
$var = rand(0,100);
$val = rand(0,100);

$_SESSION["Hola"] = "Mundo session";
$_SESSION[$var] = $val;

print_r($_SESSION);


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
    
<h1>Sesiones</h1>



</body>
</html>