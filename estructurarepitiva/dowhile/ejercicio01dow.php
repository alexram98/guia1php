<?php
/* 1) En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes. */

/* DO WHILE */
$contador=0;
$descuento=0;
$subtotal=0;
$cantidad = 0;
$precio=0;
do {
    $contador=0;
    echo "\n-----------------------\n";
    echo "\n-----------INFORMACION DEL CLIENTE #".$contador."--------------\n";
    do {
        $descuento=0;
        /* MENU */
        echo "\n-----------------------\n";
        echo "1. Libros\n";
        echo "2. Revista\n";
        echo "3. Cuadernos\n";
        $opcion= readline('Seleccione una Opcion: ');
        echo "\n-----------------------\n";
        $cantidad=readline('Cantidad: ');
        $precio=readline('Precio: ');
        $subtotal=$cantidad*$precio;
        switch ($opcion) {
            case '1':
                # code...
                break;
            case '2':
                # code...
                break;
            case '3':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        echo "\n-----------------------\n";
        echo 'Subtotal: $ ' . $subtotal . "\n";
        echo 'Descuento: $ ' . $descuento . "\n";
        echo 'Total a pagar por el articulo: $ ' . ($subtotal - $descuento) . "\n";
        /* ARTICULOS */
        $resp = readline('Desea seleccionar otro articulo? S=SI/N=NO:');
    } while (strtoupper($resp) == 'S');


/* CLIENTES */
$respuesta = readline('Desea hacer pedido de otro cliente? ');
} while (strtoupper($respuesta) == 'S');

?>