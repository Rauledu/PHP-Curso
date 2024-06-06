<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Blog</h2>

<?php


 $miconexion=mysqli_connect("localhost", "root","", "bbddblog");

        /*comprobando conexion*/

        if (!$miconexion) {

            echo "La conexion ha fallado";
            exit();
        }

        $miconsulta="select * from contenido order by fecha desc";
        $resultado= mysqli_query($miconexion, $miconsulta);

        if ($resultado == mysqli_query($miconexion, $miconsulta)) {
            
            while($registro=mysqli_fetch_assoc($resultado)) {

                echo "<h3>". $registro['titulo'] ."</h3>";

                echo "<h4>". $registro['fecha'] ."</h4>";

                echo "<div style ='width: 400px'>" . $registro['comentario'] . "</div></br>";

                if($registro['imagen'] !=""){

                    echo "<img src='imagenes/" . $registro['imagen'] ."'width='300px'   />";

                }

                echo "<hr/>";

            }

        }


?>
</body>
</html>