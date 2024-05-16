<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        
        $nombre= "Raul";

          function dameNombres(){
            global $nombre;
            $nombre="El nombre es " . $nombre;
        }

        dameNombres();

        echo $nombre;
    
    
    
    ?>
</body>
</html>