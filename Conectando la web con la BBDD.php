<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando la web con la BBDD</title>
</head>
<body>
    <?php
    
    
        $db_host="localhost";
        $db_nombre="usuario";
        $db_usuario="root";
        $db_password="";

        $conexion= mysqli_connect(
            $db_host,
            $db_usuario,
            $db_password
            );

                if (mysqli_connect_errno()){
                echo "Falla de conexion.";
                exit();
            }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");

        $consulta="select * from datosusuarios";
        

        $resultados=mysqli_query($conexion, $consulta);

            while($row = mysqli_fetch_row($resultados))
            {
                
                    echo $row[0] ." " ;
                    echo $row[1] . " ";
                    echo $row[2] . "    ";
                    echo $row[3] . "  ";
                echo "<br>";
                
            }


                mysqli_close($conexion);

    ?>
</body>
</html>