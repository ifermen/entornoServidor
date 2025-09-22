<?php
/*
15. Crea una función que reciba un array de números y devuelva el
promedio.
*/
function average($nums){
    $sum = 0;
    foreach($nums as $num){
        $sum = $sum + $num;
    }

    return $sum/count($nums);
}

echo average([1,2,3,4,5,6,7,8,9,10]);