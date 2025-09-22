<?php
/*
17. Crea una función que reciba un número y devuelva su factorial.
*/
function factorial($num){
    $result = 1;
    for($i = 1;$i<=$num; $i++){
        $result = $result * $i;
    }

    return $result;
}

echo factorial(5);