<?php
/*
20.- Dado el siguiente array asociativo que contiene información de varios
alumnos (nombre, edad, nota final):
$alumnos = [
 ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
 ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
 ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
 ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];
- Escribe un código que muestre el nombre del alumno con la nota más alta.
- Calcula y muestra la media de las notas.
- Muestra un listado de los alumnos mayores de 19 años.
*/
$alumnos = [
 ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
 ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
 ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
 ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];

function showHighestScore(){
    global $alumnos;
    $result = $alumnos[0];
    foreach($alumnos as $ele){
        if($result["nota"]<$ele["nota"]){
            $result = $ele;
        }
    }

    echo $result["nombre"] . "<br>";
}

showHighestScore();

function avgScore(){
    global $alumnos;
    $sum = 0;
    foreach($alumnos as $ele){
        $sum = $sum + $ele["nota"];
    }

    return $sum/count($alumnos);
}

echo avgScore() . "<br>";

function showOlderThan19(){
    global $alumnos;
    foreach($alumnos as $ele){
        if($ele["edad"]>19){
            echo $ele["nombre"] . ", ";
        }
    }
    echo "<br>";
}

showOlderThan19();