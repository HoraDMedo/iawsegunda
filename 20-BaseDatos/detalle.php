<?php 
include('acceso_datos.php');

// ERORO SQLi
// No hacer
// $datos = $conexion_bd->query('SELECT * FROM Ciclistas WHERE id='. $_GET['id']);

//SELECT with WHERE shorter

$select = $conexion_bd->prepare("SELECT * FROM clientes WHERE nombre = :manolo;");
$row = $select->fetch($select->execute(array(':manolo' => $_GET["id"])));
print_r($row);

//print_r($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
       
    <h1> Listado del cliente <?=$row["nombre"]?></h1>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Gusto Muscial</th>
                </tr>
                <tr>
                    <td><?=$row["nombre"]?></td>
                    <td><?=$row["apellido"]?></td>
                    <td><?=$row["edad"]?></td>
                    <td><?=$row["GustosMusicales"]?></td>
                </tr>


            </table>



    </div>
</body>
</html>