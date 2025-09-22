<?php
/*
13. Escribe un bucle for que sume los números del 1 al 100 y
muestre el resultado.
*/
$sum = 0;

for ($i = 1; $i <= 100; $i++){
    $sum = $sum + $i;
}

echo $sum;