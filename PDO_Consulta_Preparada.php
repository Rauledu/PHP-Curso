<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $busqueda= $_GET["buscar"];

    try{
    
            $base = new PDO('mysql:host=localhost; dbname=usuario', 'root', '');
            $base->exec("SET CHARACTER SET utf8");

            $sql="select NOMBRE, CEDULA, EDAD, DIRECCION FROM CREDENCIALES_USUARIO WHERE CEDULA = :n_cedula";

            $resultado = $base->prepare($sql);

            $resultado ->execute(array(":n_cedula"=>$busqueda));

            while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                echo "Cedula" . $registro['CEDULA']. "Nombre: ". $registro["NOMBRE"] . "EDAD: " . $registro["EDAD"] . "DIRECCION: ". $registro["DIRECCION"] ;
            }

            $resultado->closeCursor();
         
    }catch(Exception $e){

            die('Error: '. $e->GetMessage());
    }finally{

        $base=null;
    }
    
    
    
    
    
    ?>
</body>
</html>