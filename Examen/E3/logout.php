<?php 
session_start();

if(isset($_POST["Enviar"])){

    $_SESSION['EXAMENIAW2021'] = "logout";
    header('Location: login.php');
    exit;
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
    <h1>Desloguearse</h1>
    <form method="post">
    <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>