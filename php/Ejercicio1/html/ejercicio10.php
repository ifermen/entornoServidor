<?php
/*
10. Declara una variable $edad. Usa if para mostrar "Mayor de edad"
si es 18 o más, y "Menor de edad" si no
*/
function mayoriaEdad($edad){
    if ($edad<18){
        echo "Es menor de edad";
    }else{
        echo "Es mayor de edad";
    }
}

mayoriaEdad(21);