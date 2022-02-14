<?php


if (isset($_COOKIE["contador"])){

    $cadena=$_COOKIE["contador"];
    $cadena=$cadena+1;
    setcookie("contador", $cadena);

}else{
    
    setcookie("contador", 0);

}

?>

