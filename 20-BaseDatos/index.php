<?php
include('acceso_datos.php');

$datos = $conexion_bd->query('SELECT * FROM clientes order by edad desc');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Listado de Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>edad</th>
                    <th>GustosMusicales</th>
                    <th>Mayor si o no</th>
                    <th>Enlace Detalles</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($datos as $fila) { ?>
                <tr>
                    <td><?=$fila['nombre']?></td>
                    <td><?=$fila['apellido']?></td>
                    <td><?=$fila['edad']?></td>
                    <td><?=$fila['GustosMusicales']?></td>
                    

                            <?php if($fila['edad'] > 17) { ?>
                            <td>   Es mayor cerdo </td>
                                

                            <?php } else { ?>

                            <td>   Es Menor de edad </td>


                            <?php } ?>
                    <td>
                    <a href="detalle.php?id=<?=$fila['nombre']?>">
                            <?=$fila['nombre']?>
                    </a>
                     </td>


                </tr>

                <?php } ?>      
                
            </tbody>
        </table>
    </div>
</body>
</html>