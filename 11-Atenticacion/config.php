<?php

session_start();


if(isset($_POST["colorcito"])){
    $_SESSION["color"] = $_POST["colorcito"];
    $colorcito=$_SESSION["color"];
    $color="style='background-color:$colorcito;'";
    
}

$_SESSION["botoncito"] = $_POST["colorcito"];
$pulsado=$_SESSION["botoncito"];
$colorcito=$_SESSION["color"];
$color="style='background-color:$colorcito;'";

print_r($_SESSION)




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?=$color?>>
<nav style="border:1px solid black; width:100%; padding:2%;">

<a href="page1.php">Pagina 1</a>
<a href="page2.php">Pagina 2</a>
<a href="config.php">Config</a>

</nav>

<form action="config.php" method="post">
    <label>Elige el Colorcito</label>
    <input type="color" name="colorcito" value="<?=$colorcito?>">
    <input type="submit" name="boton">
</form>


</body>
</html>