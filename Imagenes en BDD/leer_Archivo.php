<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Id="";

    $contenido="";

    $tipo="";

    require("Datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario, $db_password);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");

        mysqli_set_charset($conexion,"utf8");

        $consulta="SELECT * FROM ARTICULOS where ID='2'";

        $resultado=mysqli_query($conexion,$consulta);

        while ($fila=mysqli_fetch_array($resultado)) {

            $id=$fila["ID"];
            $contenido=$fila["Contenido"];
            $tipo=$fila["Tipo"];

        }

        echo "ID: " . $id .  "<br>";

        echo "Tipo " . $tipo . "<br>";

        echo  "<img src='data:image/png; base64," . base64_encode($contenido) . "'>";

       
?>
<!-- <div>
    <img src="\uploads\<?php echo $ruta_img;?>" alt="Imagen del primera articulo" width="25%"/>
</div> -->
</body>
</html>
