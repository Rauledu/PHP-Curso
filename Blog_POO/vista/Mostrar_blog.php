<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    include("../modelo/Manejo_objetos.php");

     try {
            
            $miconexion= new PDO('mysqli: host=localhost; dbname=bbddblog', 'root', '');


            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $manejo_objeto=new Manejo_Objetos($miconexion);

            $tabla_blog=$manejo_objeto->getContenidoPorFecha();

            if(empty($tabla_blog)){

                    echo "No hay entradas de blog";

            }else{

                foreach($tabla_blog as $valor){

                    echo "<h3>".$valor->getTitulo()."</h3>";

                    echo "<h4>".$valor->getFecha()."</h4>";

                    echo "<div style ='width: 400 px'>";

                    echo $valor->getComentario() ."</div>";

                    if ($valor->getimagen() != "") {
                        
                        echo "<img src = '../imagenes/";

                        echo $valor->getimagen() . "' width= '300px'  height= '200' />";


                    }

                    echo "<hr/>";
                }
            }

     } catch(Exception $e){

            die("Error: " . $e->getMessage());
        }
?>

<br/>

<a href="Formulario.php"> Volver a la pagina de insercion</a>
</body>
</html>
