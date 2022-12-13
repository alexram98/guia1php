<?php
/*3. En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. 
Si el paciente es operado deberá además cancelar $1000 por los gastos más 20% 
del pago total por honorarios del doctor. Dados n días que estuvo el paciente, 
escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos hechos. */
$name = '';
$dias = 0;
$pagopordias = 0;
$operado = '';
$pagooperado=0;
$pagofinal = 0;
$estado = '';
$honorarios = 0;
$pago_total = 0;


if (isset($_POST['enviar'])) {
    $name = $_POST['name'];
    $dias = $_POST['dias'];
    $estado = $_POST['estado'];

    $pagopordias = $dias * 25;

    switch($estado){
        case 'Operado':
            $pagooperado = 1000;
            $honorarios = ($pagopordias + $pagooperado) * 0.2;
            break;
        case 'NoOperado':
            $pago_total = $pagopordias;
            break;
        /* default:
        echo 'No ';
        break; */
    }
    $pagofinal = $pagopordias + $pagooperado + $honorarios;

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
    <title>Ejercicio 3</title>
</head>

<body>
    <header class="container">
        <h2>Pagos a un Hospital</h2>
    </header>
    <main class="container">
        <section>
            <form class="row gx-3 gy-2 align-items-center" method="POST" action="ejercicio03.php">
                <div class="col-sm-3">
                    <label for="name" class="form-label">Nombre del Paciente</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                </div>

                <div class="col-sm-3">
                    <label for="dias" class="form-label">Numero de Dias Ingresado</label>
                    <input type="number" class="form-control" id="dias" name="dias"  required>
                </div>

                <div class="col-sm-3">
                <label for="menu" class="form-label">Estado del paciente</label>
                    <select class="form-select" name="estado" aria-label="Default select example">
                        <option value="operado">Operado</option>
                        <option value="noOperado">No Operado</option>
                    </select>                 
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="enviar">Efectuar</button>
                </div>
            </form>
            <br>
            <div class="alert alert-primary" role="alert">
                <h2>Detalles</h2>
                <hr>
                <strong>
                    Nombre Paciente:
                </strong>
                <?php echo $name; ?>
                <br>
                <strong>
                    Numero de Dias Ingresado: 
                </strong>
                <?php echo $dias; ?>
                <br>
                <strong>
                    Total Pago por los Dias Ingresado: $
                </strong>
                <?php echo $pagopordias; ?>
                <br>
                <strong>
                    Operacion: 
                </strong>
                <?php echo "$ " .$pagooperado; ?>
                <br>
                <strong>
                    Honorarios: 
                </strong>
                <?php echo "$ " .$honorarios; ?>
                <br><br>
                <h3>Total a Pagar: </h3>
                <?php echo "$ " . $pagofinal ?>
            </div>
        </section>
    </main>
</body>

</html>