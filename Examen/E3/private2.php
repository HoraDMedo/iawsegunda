<?php 
session_start();

if(!isset($_SESSION['EXAMENIAW2021']) || $_SESSION['EXAMENIAW2021'] == "logout") {
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
    <h1>Esto es secreto 2</h1><br>
    <?php include("menu2.php")?>
</body>
</html>