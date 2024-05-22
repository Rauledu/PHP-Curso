<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

try{

        $base= new PDO("mysql: host=localhost; dbname=usuario", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM USUARIO_PASS WHERE USUARIO = :login and password= :password";
        $resultado=$base->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);

        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if ($numero_registro !=0) {

            //echo"<h2>Adelante!!</h2>";

            session_start();

            $_SESSION["usuario"]=$_POST["login"];

            header("location: Usuario_registrado.php");

        }else{
            
            header("location: Login.php");

        }

}catch(Exception $e){


    die("Error: ". $e->getMessage());
}






?>    
</body>
</html>