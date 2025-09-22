<?php
/*
9. Crea una función que reciba un número y devuelva si es par o
impar.
*/
function parOImpar($num){
    if($num%2 == 0){
        echo $num . " es par";
    }else{
        echo $num . " es impar";
    }
}

parOImpar(21);