<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>



 <style>
    .resaltar {

        color: #F00;
        font-weight:bold;
    }


 </style>   
</head>
<body>
    <?php

    $variable_1="Casa";
    $variable_2="CASA";

    //$resultado = strcasecmp($variable_1, $variable_2);
     $resultado = strcmp($variable_1, $variable_2);


    //devuelve 1 si no son iguales y 0 si son iguales.

    if (!$resultado){
        echo "coinciden";
    }else{
        echo " No coinciden";
    }


        
    
    
    ?>
</body>
</html>