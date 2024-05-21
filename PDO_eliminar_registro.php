<?php
       $cedula=$_POST["ID"];
       
        try{
            $base = new PDO('mysql:host=localhost; dbname=usuario', 'root', '');
            $base->exec("SET CHARACTER SET utf8");

            $sql="DELETE FROM CREDENCIALES_USUARIO where cedula= :ID";
            
            $resultado = $base->prepare($sql);

            //$resultado ->execute(array(":n_cedula"=>$busqueda));

            $resultado->execute(array(":ID"=>$cedula));

            /*while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                echo "Cedula" . $registro['CEDULA']. "Nombre: ". $registro["NOMBRE"] . "EDAD: " . $registro["EDAD"] . "DIRECCION: ". $registro["DIRECCION"] ;
            }*/

            echo "Registro eliminado";

            $resultado->closeCursor();
        }catch(Exception $e){

            die('Error: '. $e->GetMessage());
    }finally{

        $base=null;
    }
            

?>