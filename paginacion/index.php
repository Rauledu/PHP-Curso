<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $base = new PDO("mysql: host=localhost; dbname=usuario", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $tamaño_paginas = 3;

        $pagina = 1;
        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        }

        // if (isset($_GET["pagina"])) {
    
        //     if ($_GET["pagina"] == 1) {
        //         header("Location: index.php");
        //     } else {
    
        //         $pagina = $_GET["pagina"];
        //     }
        // } else {
        // }
    
        $comenzar_desde = ($pagina - 1) * $tamaño_paginas;

        $sql_total = "select Nombre, Direccion from datosusuarios";

        $resultado = $base->prepare($sql_total);

        $resultado->execute(array());

        $num_filas = $resultado->rowCount();

        $tota_paginas = ceil($num_filas / $tamaño_paginas);

        echo "Numero de registros de la consulta: " . $num_filas . "<br/>";
        echo "Mostramos " . $tamaño_paginas . " resigstros por pagina" . "<br/>";
        echo "Mostrando la pagina " . $pagina . " de " . $tota_paginas . "<br/>";

        $resultado->closeCursor();
        $sql_limite = "select Nombre, Direccion from datosusuarios LIMIT $comenzar_desde,$tamaño_paginas";

        $resultado = $base->prepare($sql_limite);

        $resultado->execute(array());

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

            echo "Nombre: " . $registro["Nombre"] . " Direccion: " . $registro["Direccion"] . "<br/>";

        }

    } catch (Exception $e) {

        echo "Linea de error: " . $e->getLine();
    }

    //------------------------PAGINACION---------------------------//
    
    for ($i = 1; $i <= $tota_paginas; $i++) {

        echo "<a href='?pagina=" . $i . "'>'" . $i . "</a> ";
    }

    ?>
</body>

</html>