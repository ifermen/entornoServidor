<?php
/*
18. Crea una función que convierta una temperatura en grados
Celsius a Fahrenheit.
*/
function toFahrenheir($degree){
    return ($degree * 9 / 5) + 32;
}

echo toFahrenheir(32);