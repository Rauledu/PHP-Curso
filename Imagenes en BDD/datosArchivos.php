<?php

//Recibimos los datos de la imagen

$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamaño_archivo = $_FILES['archivo']['size'];


if ($tamaño_archivo<=300000) {
 
$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . "\uploads";

move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino .   $nombre_archivo);



}else{
    
    echo "El tamaño es demasiado grande";
    }

require("Datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_password);
if (mysqli_connect_errno()) {
    echo "Fallo la conexion a la Base de datos";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion,"utf8");


$archivo_objetivo=fopen($carpeta_destino . $nombre_archivo, "r");

$contenido= fread($archivo_objetivo,$tamaño_archivo);

$contenido =addslashes($contenido);

fclose($archivo_objetivo);

$sql="insert into articulos (ID, Nombre, Tipo, Contenido) 
values (0, '$nombre_archivo' , '$tipo_archivo','$contenido')";

$resultado= mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion) > 0) {

    echo"Se ha insertado el registro con exito";

}else{

    echo "No se ha podido cargar";
}


?>