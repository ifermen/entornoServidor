<?php
/*
12. Crea una función que reciba dos números y devuelva el mayor.
*/
function numMayor($num1,$num2){
    if($num1<$num2){
        echo $num2 . " es mayor que " . $num1;
    }else if($num2<$num1){
        echo $num1 . " es mayor que " . $num2;
    }else{
        echo $num1 . " y " . $num2 . " son iguales";
    }
}

numMayor(8,8);