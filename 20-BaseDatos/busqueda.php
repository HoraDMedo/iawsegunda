<?php 

include('acceso_datos.php');

if (isset($_POST["enviar"])){

    
$select = $conexion_bd->prepare("SELECT * FROM clientes WHERE nombre like '%:ddd%' or apellido = '%:ddd%';");
$select->execute(array(':ddd' => $_POST["cadena"]));
$row = $select->fetchAll(PDO::FETCH_ASSOC);
print_r($row);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de usuarios</title>
</head>
<body>
    <h1> Busqueda de usuarios</h1>
    <form action="" method="post">

        <input type="text" name="cadena" id="">
        <input type="submit" name="enviar" value="Buscar">
        <br><br>
        <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Gusto Muscial</th>
                </tr>

                <?php foreach($row as $row2) { ?>
                <tr>
                    
                    <td><?=$row2["nombre"]?></td>
                    <td><?=$row2["apellido"]?></td>
                    <td><?=$row2["edad"]?></td>
                    <td><?=$row2["GustosMusicales"]?></td>
                </tr>

                <?php } ?> 

            </table>



    </form>



</body>
</html>