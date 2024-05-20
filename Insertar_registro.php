<?php
       $cedula=$_GET["ID"];
       $nombre=$_GET["nombre"];
       $edad=$_GET["edad"];
       $direccion=$_GET["direc"];
       $password=$_GET["psw"];
        require("Datos_conexion.php");
        $conexion = mysqli_connect($db_host, $db_usuario, $db_password);

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");
            $sql="insert into CREDENCIALES_USUARIO (NOMBRE, CEDULA,PASSWORD, EDAD, DIRECCION)
            values (?,?,?,?,?)";
            $resultado=mysqli_prepare($conexion, $sql);
            $ok=mysqli_stmt_bind_param($resultado,"ssiis",$nombre,$cedula,$password,$edad,$direccion);
            $ok=mysqli_stmt_execute($resultado);

            /*if($ok ==false){

                echo "Error al ejecutar la consulta";
            }else {}*/

                    echo "Registro agregado. <br><br>";

                     echo "ID: $cedula <br>
                            nombre: $nombre <br>
                            edad: $edad <br>
                            Password: $password <br>
                            Direccion: $direccion <br>";


                    mysqli_stmt_close($resultado);
            

?>

