<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando la web con la BBDD</title>
</head>
<style>

    table {
        width: 50%;
        border:1px dotted #FF0000;
        margin: auto;
    }
</style>
<body>
    <?php
    
        require("Datos_conexion.php");
        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");

        $consulta="select * from tarjetas";
        

        $resultados=mysqli_query($conexion, $consulta);
            //Array asociativo: Los arrays asociativos son arrays cuyos keys son strings con valores personalizados.
            while($row = mysqli_fetch_array($resultados,MYSQLI_ASSOC))
            {
                echo "<table><tr><td>";
                    echo $row['Nro_tarjeta'] ." </t><td>" ;
                    echo $row['Cedula'] . " </t><td>";
                    echo $row['Cupo_global'] . "</t><td></tr></table>";
                echo "<br>";
                
            }


                mysqli_close($conexion);

    ?>
</body>
</html>