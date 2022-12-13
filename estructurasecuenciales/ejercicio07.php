<?php
/*7. Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, 
el vendedor desea saber cuánto dinero obtendrá por concepto de comisiones 
por las tres ventas que realiza en el mes y el total que recibirá en el mes 
tomando en cuenta su sueldo base y comisiones. */

$venta_1 = 0;
$venta2 = 0;
$venta3 = 0;
$totalventas = 0;
$comision = 0;
$totalsueldo = 0;

if (isset($_POST['enviar'])) {

    $venta_1 = $_POST['venta1'];
    $venta2 = $_POST['venta2'];
    $venta3 = $_POST['venta3'];

    $totalventas = $venta_1 + $venta2 + $venta3;
    $comision = ($venta_1 + $venta2 + $venta3) * 0.1;
    $totalsueldo = $totalventas + $comision;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ejercicio 7</title>
</head>

<body>
    <header class="container">
        <h2>Calcular el total de las ventas y la comision de un vendedor</h2>
    </header>
    <main class="container">
        <section>
            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio07.php">
                <div class="col-sm-3">
                    <label for="venta1" class="form-label">Ingrese la primer venta: </label>
                    <input type="text" class="form-control" id="venta1" name="venta1" placeholder="0.00" required>
                </div>

                <div class="col-sm-3">
                    <label for="venta2" class="form-label">Ingrese la segunda venta: </label>
                    <input type="text" class="form-control" id="venta2" name="venta2" placeholder="0.00" required>
                </div>

                <div class="col-sm-3">
                    <label for="venta3" class="form-label">Ingrese la tercer venta: </label>
                    <input type="text" class="form-control" id="venta3" name="venta3" placeholder="0.00" required>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>Detalles</h2>
                <hr><hr>
                <strong>
                    Total de las Tres Ventas Realizadas: $ 
                </strong>
                <?php echo $totalventas; ?>
                <br>
                <strong>
                    Comision por la Ventas: $ 
                </strong>
                <?php echo $comision; ?>
                <br>
                <h3>Total a Recibir en el Mes: $ </h3>
                <?php echo $totalsueldo; ?>
            </div>
        </section>
    </main>
</body>

</html>