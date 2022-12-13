<?php
/*2. Calcular el perímetro y área de un rectángulo dada su base y su altura. */
//Variables

$base=15;
$alt=10;

$perimetro= $base + $base + $alt + $alt;
$area= $base*$alt;

echo "La Base del Rectangulo Es: " .$base ."<br>";
echo "La Altura del Rectangulo Es: " .$alt ."<br>";



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <h2>Resultado de Perimetro y Area</h2>
    </header>
    <table border="1" width="40%">
    <thead>
            <tr>
                <th>PERIMETRO</th>
                <th>AREA</th
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $perimetro; ?></td>
                <td><?php echo $area; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>