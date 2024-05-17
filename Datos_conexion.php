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
?>