<?php
//3. Dados los catetos de un triángulo rectángulo, calcular su hipotenusa.
$catetoa =15;
$catetob= 20;
//$catetoc= sqrt(5);

$hipotenusa= sqrt(pow($catetoa,2)+pow($catetob,2));
echo "Cateto a = " .$catetoa .", " ."Cateto b = " .$catetob ."<br>";
echo "La Hipotenusa del Triangulo Rectangulo Es: " .$hipotenusa;
?>