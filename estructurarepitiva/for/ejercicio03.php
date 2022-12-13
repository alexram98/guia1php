<?php
/*3. Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos. */

/* ENTRADA EN CONSOLA */

$positivo=0;
$negativo=0;
$nulo=0;
for ($i=1; $i < 100; $i++) {
    $num = rand(-10, 10);
    echo $num.', ';
    if ($num==0) {
        $nulo++;
    }elseif($num>0){
        $positivo++;
    }else {
        $negativo++;
    }
    
}
    echo 'Cantidad de Numeros Positivos: '.$nulo."<br>";
    echo 'Cantidad de Numeros Negativos: '.$positivo."<br>";
    echo 'Cantidad de Numeros Nulos: '.$negativo."<br>";
?>