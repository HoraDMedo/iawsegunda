<?php
echo "GET:<br>";
print_r($_GET);
echo "<br>";

echo "POST:<br>";
print_r($_POST);
echo "<br>";

echo "COOKIES:<br>";
print_r($_COOKIES);
echo "<br>";

echo "SESSION:<br>";
print_r($_SESSION);
echo "<br>";

echo "SERVER:<br>";
print_r($_SERVER);
echo "<br>";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>

        <form action="index.php" method="post">

            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" />
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" />
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="edad" /> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="edad" /> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="edad" /> 60-79</label>
            </fieldset>
<br>

            <input type="submit" name="envssiar" value="Enviar">

        </form>
    </div>
</body>
</html>