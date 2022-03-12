<?php
include('acceso_datos.php');

$cosa = "%" . $_GET["nombre"] . "%";
$var=false;


    if(isset($_GET{"enviar"})){
    $var=true;

    }


    if ($cosa == "%%"){
    $var=false;


    }else{
        $select = $conexion_bd->prepare("SELECT * FROM Respuesta WHERE contenido like :ddd;");
        $select->execute(array(':ddd' => $cosa ));
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        //print_r($row);
    }




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
        <?php if ($var == false){ ?>

        <h1>Bienvenido a Google 2</h1>

        <?php }else{ ?>
            
            <h1>Buscando....</h1>


        <?php } ?>
          
        <form action="" method="get">

            <input type="text" name="nombre" value="<?=$_GET["nombre"]?>" id="">
            <input type="submit" name="enviar" value="buscar">

        </form>

        <?php if ($var == true){ ?>

            <h2> La busqueda fue <?=$_GET["nombre"]?> </h2>

            <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Nombre</th>
                    <th>Creado</th>
                    <th>id_tema</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($row as $fila) { ?>
                <tr>
                    <td><?=$fila['id']?> </td>
                    <td><?=$fila['titulo']?> </td>
                    <td><?=$fila['contenido']?> </td>
                    <td><?=$fila['nombre']?></td>
                    <td><?=$fila['creado']?> </td>
                    <td><?=$fila['id_tema']?> </td>

                </tr>

                <?php } ?>      
                
            </tbody>
        </table>

        <?php } ?>




    </div>
</body>
</html>