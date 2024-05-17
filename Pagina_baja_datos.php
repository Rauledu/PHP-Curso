<?php
    
        
        require("Datos_conexion.php");
        $conexion=mysqli_connect($db_host, $db_usuario,$db_password);
        $usuario=mysqli_real_escape_string($conexion, $_GET["usu"]);
        $contraseña=mysqli_real_escape_string($conexion, $_GET["con"]);
  

        

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la Base de datos");
        mysqli_set_charset($conexion, "utf8");


        $consulta="delete  from credenciales_usuario where nombre = '$usuario' and password='$contraseña'";

        echo "$consulta <br><br>";
            mysqli_query($conexion, $consulta);

        if(mysqli_affected_rows($conexion)>0){
                
            echo"Baja procesada";


        }else{

            echo "No se ha encontrado usuario";
        }

        /*if(mysqli_query($conexion, $consulta)){
          
            
                    echo "Baja procesada";
        }*/

                mysqli_close($conexion);

?>
<!-- el comando mysqli_real_escape_string Básicamente lo que hace es "escapar" los caracteres especiales. Es decir, que les coloca por delante un símbolo de escape () para evitar que determinados caracteres se usen como son. Habitualmente son caracteres como ' " \n \r.
De esta manera evita que esos caracteres reservados (es decir, parte de comandos MySQL) se cuelen en un valor usado dentro de una sentencia MySQL. -->
