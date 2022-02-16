<?php

session_start();


if(isset($_SESSION["color"])){

    $colorcito=$_SESSION["color"];
    $color="style='background-color:$colorcito;'";

}
echo $color

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?=$color?> >
<nav style="border:1px solid black; width:100%; padding:2%;">

<a href="page1.php">Pagina 1</a>
<a href="page2.php">Pagina 2</a>
<a href="config.php">Config</a>

</nav>

<h1>Esta es la pagina 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga esse nisi amet reiciendis nulla et quasi! Ipsa modi architecto numquam doloribus, officiis, expedita sequi nihil iusto quasi labore deserunt?</h1>



</body>
</html>