<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos views</title>
    <style>
        td {

            border: 1px dotted #FF0000;

        }
    </style>
</head>

<body>

    <table>

        <tr>
            <td>Nro de tarjeta</td>

        </tr>


        <?php

        foreach ($matrizProducto as $registro) {


            echo "<tr><td>" . $registro["Nro_tarjeta"] . "</td></tr>";

        }


        ?>
    </table>
</body>

</html>