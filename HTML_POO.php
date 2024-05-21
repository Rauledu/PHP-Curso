<?php
    require "Devuelve_usuario.php";

    //$cedula=$_GET["buscar"];

    $usuarios= new DevuelveUsuarios();
    $array_usuarios= $usuarios->get_Usuario();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    foreach($array_usuarios as $elemento){

        /*echo "<table><tr><td>";
        echo $elemento['nombre'] . "</td><td>";  
        echo $elemento['Edad'] . "</td><td>";
        echo $elemento['Clave'] . "</td><td>";
        echo $elemento['Email'] . "</td><td>";

        echo "<br>";
        echo "<br>";*/

        var_dump($elemento);



    }
    
    
    ?>    



</body>
</html>