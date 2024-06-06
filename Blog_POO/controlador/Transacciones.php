   <?php
    
        include_once("../modelo/Objeto_blog.php");

        include_once("../modelo/Manejo_objetos.php");

        try {
            
            $miconexion= new PDO('mysqli: host=localhost; dbname=bbddblog', 'root', '');


            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
                

                $detino_ruta="../imagenes/";

                move_uploaded_file($_FILES['imagen']['tmp_name'], $detino_ruta . $_FILES['imagen']['name']);

                echo "El archivo " . $_FILES['imagen']['name'] . "Se ha copiado en el directorio de imagenes";



            }else{

                echo "El archivo no se ha podio copiar al directorio de imagenes";


                }
            }
         
      


            $manejo_objeto= new Manejo_Objetos($miconexion);

            $blog= new Objeto_blog();

            $blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']), ENT_QUOTES));

            date_default_timezone_set('America/Caracas');

            $blog->setFecha(date("Y-m-d H:i:s"));

            $blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']), ENT_QUOTES));

            $blog->setimagen($_FILES["imagen"]["name"]);

            $manejo_objeto->insertaContenido($blog);

            echo "<br/> Entrada de blog agregada con exito <br/>";

        }catch(Exception $e){

            die("Error: " . $e->getMessage());
        }

        
    
    ?>