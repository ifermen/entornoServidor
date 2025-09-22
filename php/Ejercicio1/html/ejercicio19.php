<?php
/*
19. En una web que simula una calculadora, un usuario puede
introducir dos números y la web le dirá cual de los es mayor.
Teniendo en cuenta que el primer número estará en una variable
llamada $a, el segundo número viene almacenado en la variable $b
y el operador en una variable llamada $operador, realiza un
programa que imprima la salida de la operación. Ten en cuenta los
posibles errores que se pueden dar en el caso de la división.
*/
function calculator($a,$b,$operator){
    $result = 0;
    if($operator == "+"){
        $result = $a + $b;
    }else if($operator == "-"){
        $result = $a - $b;
    }else if($operator == "*"){
        $result = $a * $b;
    }else if($operator == "/"){
        $result = $a / $b;
    }

    return $result;
}

echo calculator(2,4,"+") . "<br>";
echo calculator(15,6,"-") . "<br>";
echo calculator(2,4,"*") . "<br>";
echo calculator(6,3,"/") . "<br>";