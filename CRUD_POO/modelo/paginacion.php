<?php

require_once("conectar.php");

$base=Conectar:: conexion();

$tamaño_paginas = 3;

        $pagina = 1;
        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        }

        $comenzar_desde = ($pagina - 1) * $tamaño_paginas;

        $sql_total = "select Nombre, Direccion from datosusuarios";

        $resultado = $base->prepare($sql_total);

        $resultado->execute(array());

        $num_filas = $resultado->rowCount();

        $tota_paginas = ceil($num_filas / $tamaño_paginas);



?>