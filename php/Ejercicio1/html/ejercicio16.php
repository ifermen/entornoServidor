<?php
/*
16. Usa un bucle foreach para imprimir los caracteres de una
cadena uno por uno.
*/
$text = "Diamante";

$textArray = str_split($text);

foreach($textArray as $char){
    echo $char . "<br>";
}