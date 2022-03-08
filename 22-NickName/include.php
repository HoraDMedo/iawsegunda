<?php

if(isset($_enviar)){

    if ($_POST["nombre"] == ""){

        $_SESSION["nom"] = "anonimo";

    }
    $_SESSION["nom"] = $_POST["nombre"];
    $_SESSION["foto"] = $_POST["foto"];
    print_r($_SESSION["nom"]);
    print_r($_SESSION["foto"]);
}



?>