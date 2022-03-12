<?php 

session_start();


if(isset($_POST["Enviar"])) { 
    
    if($_POST["secreto"] == 1234) {
         $_SESSION["EXAMENIAW2021"] = "aprobado";
         header('Location: private2.php');
         exit;
    } else {

        $_SESSION["EXAMENIAW2021"] = "logout";
    }
} else {
    $_SESSION["EXAMENIAW2021"] = "logout";
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
    <form action="login.php" method="post">
        <input type="password" name="secreto" id="">
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>