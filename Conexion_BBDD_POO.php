<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $conexion = new mysqli("localhost", "root", "","usuario");

    if($conexion->connect_errno){
        
        echo"Fallo la conexion" . $conexion->connect_errno;
    }

    //mysqli_set_charset($conexion, "utf8");

    $conexion->set_charset("utf8");

    $sql="SELECT *FROM tarjetas";

    $resultado = $conexion->query($sql);

    if($conexion-> errno){

        die($conexion->error);
    }

    while($row=$resultado->fetch_assoc()){

        echo "<table><tr><td>";
                    echo $row['Nro_tarjeta'] ." </t><td>" ;
                    echo $row['Cedula'] . " </t><td>";
                    echo $row['Cupo_global'] . "</t><td></tr></table>";
                echo "<br>";  

    }
        $conexion->close();

    ?>
</body>
</html>