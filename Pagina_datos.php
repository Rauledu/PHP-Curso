<?php
    
        $usuario=$_GET["usu"];
        $contraseña=$_GET["con"];
        require("Datos_conexion.php");
        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");

        //$consulta="select * from tarjetas where Cedula = '$busqueda'";

        $consulta="select * from Credenciales_usuario where nombre = '$usuario' and password='$contraseña'";

        echo "$consulta <br><br>";
        

        $resultados=mysqli_query($conexion, $consulta);
            //Array asociativo: Los arrays asociativos son arrays cuyos keys son strings con valores personalizados.
            while($row = mysqli_fetch_array($resultados,MYSQLI_ASSOC))
            {
                    echo "Bienvenido $usuario <br> Estos son tus datos: <br>";
                echo "<table><tr><td>";
                    echo $row['Nombre'] ." </t><td>" ;
                    echo $row['Cedula'] . " </t><td>";
                    echo $row['Edad'] . "</t><td></tr></table>";
                echo "<br>";
                
            }


                mysqli_close($conexion);

?>
