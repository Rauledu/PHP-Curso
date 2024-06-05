<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $miconexion=mysqli_connect("localhost", "root","", "bbddblog");

        /*comprobando conexion*/

        if (!$miconexion) {

            echo "La conexion ha fallado";
            exit();
        }

        if($_FILES['imagen']['error']){

                switch($_FILES['imagen']['error']){

                    case 1: //Error exceso de tamaño

                        echo "El tamaño del archivo excede lo permitido";
                    break;

                    case 2: //Error tamano archivo marcado en el formulario

                        echo "El tamaño del archivo excede los 2 mb";
                    break;

                    case 3: //Corrupcion de archivo
                        echo "El envio de archivo se interrumpio";
                    break;

                    case 4: //No hay fichero
                        
                        echo "No se ha enviado ningun archivo";
                    break;
                }   

        }else{

            echo "se ha subido el archivo correctamente <br/>";

            if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']) == UPLOAD_ERR_OK)) {
                

                $detino_ruta="imagenes/";

                move_uploaded_file($_FILES['imagen']['tmp_name'], $detino_ruta . $_FILES['imagen']['name']);

                echo "El archivo " . $_FILES['imagen']['name'] . "Se ha copiado en el directorio de imagenes";



            }else{

                echo "El archivo no se ha podio copiar al directorio de imagenes";


            }
        }

        date_default_timezone_set('America/Caracas');

        $titulo=$_POST['campo_titulo'];
        $fecha=date("Y-m-d H:i:s");
        $comentario=$_POST['area_comentarios'];
        $imagen=$_FILES['imagen']['name'];

        $miconsulta="INSERT INTO contenido (titulo,fecha,comentario,imagen) 
        values('$titulo', '$fecha', '$comentario', '$imagen')";
    
        $resultado= mysqli_query($miconexion, $miconsulta);

        //Cerramos conexion

        mysqli_close($miconexion);

        echo "<br/> Se ha agregado el comentario con exito. <br/><br/>";
    
    
    ?>

</body>
</html>