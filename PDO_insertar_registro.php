<?php
       $cedula=$_POST["ID"];
       $nombre=$_POST["nombre"];
       $edad=$_POST["edad"];
       $direccion=$_POST["direc"];
       $password=$_POST["psw"];

        try{
            $base = new PDO('mysql:host=localhost; dbname=usuario', 'root', '');
            $base->exec("SET CHARACTER SET utf8");

            $sql="insert into CREDENCIALES_USUARIO (NOMBRE, CEDULA,PASSWORD, EDAD, DIRECCION)
            values (:nombre, :ID, :psw, :edad, :direc)";
            
            $resultado = $base->prepare($sql);

            //$resultado ->execute(array(":n_cedula"=>$busqueda));

            $resultado->execute(array(":nombre"=>$nombre, ":ID"=>$cedula, ":psw"=>$password,":edad"=>$edad,":direc"=>$direccion));

            /*while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                echo "Cedula" . $registro['CEDULA']. "Nombre: ". $registro["NOMBRE"] . "EDAD: " . $registro["EDAD"] . "DIRECCION: ". $registro["DIRECCION"] ;
            }*/

            echo "Registro insertado";

            $resultado->closeCursor();
        }catch(Exception $e){

            die('Error: '. $e->GetMessage());
    }finally{

        $base=null;
    }
            

?>