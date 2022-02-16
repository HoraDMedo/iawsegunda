<?php

$aleatorio=3;

$final="";
if (isset($_POST["enviar"])){

        if ($_POST["num"] == $aleatorio){
            $final="<h3>Correcto Has adivinado el numero</h3>";
        }

        if ($_POST["num"] < $aleatorio){
            $final="<h3>Un poquito mas</h3>";
        }

        if ($_POST["num"] > $aleatorio){
            $final="<h3>Un poquito menos</h3>";
        
        }
else{
    


}

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
<body style="margin-left:10%;">
    
<h1>Hola buenas Dime un numero</h1>
<h2>Numero entre el 1 y el 10</h2>
<form action="index.php" method="post" style="margin-left:10%;">
    <input type="number" name="num" max="10" min="0">
    <input type="submit" name="enviar">
<?=$final?>

</form>




</body>
</html>