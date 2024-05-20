<?php
    
       $usuario=$_GET["buscar"];
        require("Datos_conexion.php");
        $conexion = mysqli_connect($db_host, $db_usuario, $db_password);

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");

        //1 crear la instruccion sql
            $sql="select NOMBRE, CEDULA, EDAD, DIRECCION FROM CREDENCIALES_USUARIO WHERE CEDULA = ?";

        //2 PREPARAR LA CONSULTA

            $resultado=mysqli_prepare($conexion, $sql);

        //3 unir los parametros

            $ok=mysqli_stmt_bind_param($resultado, "s", $usuario);
        
        //4 Ejecutar sql

            $ok=mysqli_stmt_execute($resultado);

            if($ok ==false){

                echo "Error al ejecutar la consulta";
            }else {

                    $ok=mysqli_stmt_bind_result($resultado, $nombre,$cedula, $edad, $direccion);
                    echo "datos encontrados: <br><br>";

                    while(mysqli_stmt_fetch($resultado)){
                        echo $nombre . " " . $cedula . " " . " " . $edad . "    ". $direccion . "<br>";
                    }

                    mysqli_stmt_close($resultado);
            }

        //5 lectura de valores.

                /* Ventajas de las consultas preparadas
                - Evitan inyeccion SQL
                -En consultas de tipo insert son mas rapidas y eficientes

                Desventajas

                -Hay que escribir mas codigo.
                -Hay que conocer nuevas funciones.
                
                
                
                */ 
            


?>
