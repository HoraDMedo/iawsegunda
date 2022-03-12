<?php

#### Bases de datos

#Tenemos una base de datos de clientes con nombre, apellido, edad y gustos musicales (campo de texto largo)

#Saca un listado con nombre apellido y una marca indicando si es menor de edad o mayor de edad (puede ser una imagen en el listado)
#Cada registro tendrá un enlace al detalle.
#En el detalle se verán todos los campos.

#Utiliza estilo CSS y HTML para que la página quede centrada y con borde.
#Los estilos tienen que ser consistentes entre páginas


try {
    $conexion_bd = new PDO(
                    'mysql:host=localhost;dbname=myexa',
                    'root',
                    'usuario'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>