



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="./js.js"></script>
    </head>

        <body align="center">

        <form action="" method="post">

             <input type="text" name="nombre"/>
             <input type="number" name="numero"/>

            <input type="submit" name="enviar"/>
            
        </form>



        <div>
<br><br>

 <?php
            session_start();
                #### Hola cansino
                #Crea un formulario con un campo tipo texto y un valor númerico
                #Cuando el formulario se procese (en la misma paǵina o en otra), pintará el nombre el número de veces indicado
                #Cada nombre se pintará en un span con un background y un color de texto aleatorios

                #$_SESSION["Hola"]

        
            if(isset($_POST["enviar"])){

            
            
                 for ($i = 1; $i <= $_POST["numero"]; $i++) {
                $color1=rand(0,255);
                $color2=rand(0,255);
                $color3=rand(0,255);
                $color4=rand(0,255);
                $color5=rand(0,255);
                $color6=rand(0,255);
    
    
                echo "<span style='background-color: rgb($color1, $color2, $color3);color:rgb($color4, $color5, $color6);'>";
                 print_r($_POST["nombre"]);
                echo "</span>";

                 echo "<br>";
            
            
                }
            
            #print_r($_POST["numero"]);

            }

?>





        </div>

     

        </body>
</html>


