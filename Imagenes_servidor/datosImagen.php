<?php

//Recibimos los datos de la imagen

$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamaño_imagen = $_FILES['imagen']['size'];


// echo
// $_FILES['imagen']['size'];

if ($tamaño_imagen<=3000000) {

    if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif") {


    
    
//Ruta de la carpeta destino en servidor

$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '\uploads';

//Movemos la imagen del directorio temporal al directorio elegido.

move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino .   $nombre_imagen);
    }else{

        echo "Solo se pueden subir imagenes de formatos validos.";
    }
}else{
    
    echo "El tamaño es demasiado grande";
}