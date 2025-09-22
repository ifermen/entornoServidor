<?php
/*
14. Declara un array asociativo con las claves 'nombre', 'edad'
y 'email'. Imprime cada dato con un mensaje.
*/
$info = ["nombre" => "Ivan", "edad" => 23, "email" => "ivan@gmail.com"];

foreach($info as $key => $value){
    echo $key . " -> " . $value . "\n";
}