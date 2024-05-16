<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable estatica</title>
</head>
<body>
    <?php
    
    function incrementa_variable(){

        static $contador= 0;
        $contador++;

        echo $contador . "<br>";

    }
    
    incrementa_variable();
    incrementa_variable();
    incrementa_variable();
    incrementa_variable();
    
    
    ?>
</body>
</html>