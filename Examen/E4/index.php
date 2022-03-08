<?php
include('acceso_datos.php');

$datos = $conexion_bd->query('SELECT * FROM Tema ');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <div id="content">
        <h1>Listado de Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>etiqueta</th>
                    <th>Creado</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($datos as $fila) { ?>
                <tr>
                    <td>
                    <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['titulo']?>
                            
                    </a>

                    </td>
                    <td>
                    <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['nombre']?>
                    </a>


                    </td>

                    <td>
                    <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['etiqueta']?>
                    </a>    
                    </td>

                    <td>

                    <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['creado']?>
                    </a>
                    
                    </td>
         

                </tr>

                <?php } ?>      
                
            </tbody>
        </table>
    </div>
</body>
</html>