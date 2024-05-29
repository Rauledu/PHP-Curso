<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos views</title>
</head>

<body>

    <?php
    
        require("modelo/paginacion.php");
    
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table width="50%" border="0" align="center">
            <tr>
                <td class="primerafila">ID</td>
                <td class="primerafila">Nombre</td>
                <td class="primerafila">Apellido</td>
                <td class="primerafila">Direccion</td>

            </tr>

            <?php

            foreach ($matrizPersona as $persona): ?>

                <tr>
                    <td><?php echo $persona["ID"] ?></td>
                    <td><?php echo $persona["Nombre"] ?></td>
                    <td><?php echo $persona["Apellido"] ?></td>
                    <td><?php echo $persona["Direccion"] ?></td>

                    <td class="bot"><a href="Borrar.php?Id=<?php echo $persona["ID"] ?>"><input type="button" name="del"
                                value="Borrar"></a></td>
                    <td class="bot"><a
                            href="Editar.php?Id=<?php echo $persona["ID"] ?> & nom=<?php echo $persona["Nombre"] ?> & ape=<?php echo $persona["Apellido"] ?> & dir=<?php echo $persona["Direccion"] ?>">
                            <input type="button" name="up" value="Actualizar"></a></td>
                </tr>

                <?php

            endforeach;
            ?>

            <tr>
                <td></td>
                <td><input type="text" name="Nom" size="10" class="centrado"></td>
                <td><input type="text" name="Ape" size="10" class="centrado"></td>
                <td><input type="text" name="Dir" size="10" class="centrado"></td>
                <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
            <tr>
                <td>
                    
                    <?php
                    
                    for ($i = 1; $i <= $tota_paginas; $i++) {

                        echo "<a href='?pagina=" . $i . "'>'" . $i . "</a> ";
                    }

                    ?>
                </td>
            </tr>
            </tr>
        </table>
    </form>
</body>

</html>