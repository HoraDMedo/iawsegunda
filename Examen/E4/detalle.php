<?php 
include('acceso_datos.php');

// ERORO SQLi

// $tema = $conexion_bd->query('SELECT id, titulo, nombre, contenido, id_tema FROM Respuesta');

//$datos = $conexion_bd->query('SELECT * FROM Respuesta WHERE id_tema='. $_GET['id']);

$select = $conexion_bd->prepare("SELECT * FROM Respuesta WHERE id_tema = :ddd;");
$select->execute(array(':ddd' => $_GET["id"]));
$row = $select->fetchAll(PDO::FETCH_ASSOC);

//SELECT with WHERE shorter




print_r($row);


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
       
    <h1> Listado de Comentarios del tema <?=$_GET['id']?></h1>
            <table>
                <tr>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>Contenido</th>
                 
                </tr>
            



               <?php foreach($row as $fila) { ?>  
                <?php// if($fila["id_tema"] == $_GET["id"]) { ?> 
                <tr>
                
                    <td><?=$fila["nombre"]?></td>
                    <td><?=$fila["titulo"]?></td>
                    <td><?=$fila["contenido"]?></td>
   
                </tr>
                <?php// } ?>    
             <?php } ?>    

                 
               
              


            </table>



    </div>
</body>
</html>