<?php
/*
24.- Dato un array con datos de usuarios y roles:
$usuarios = [
 ["usuario" => "juan", "rol" => "admin", "activo" => true],
 ["usuario" => "maria", "rol" => "editor", "activo" => false],
 ["usuario" => "pablo", "rol" => "admin", "activo" => true],
 ["usuario" => "laura", "rol" => "suscriptor", "activo" => true],
];
- Cuenta cuántos usuarios activos hay.
- Muestra los nombres de usuarios que tienen rol "admin".
- Cambia el estado a inactivo (activo = false) para todos los usuarios con
rol "editor".
*/

$usuarios = [
 ["usuario" => "juan", "rol" => "admin", "activo" => true],
 ["usuario" => "maria", "rol" => "editor", "activo" => true],
 ["usuario" => "pablo", "rol" => "admin", "activo" => true],
 ["usuario" => "laura", "rol" => "suscriptor", "activo" => true],
];

$contActive = 0;
foreach($usuarios as $user){
    if($user["activo"]){
        $contActive++;
    }
}

echo "Usuarios activos: " . $contActive . "<br>";

echo "Usuarios con rol admin:<br>";
foreach($usuarios as $user){
    if($user["rol"] == "admin"){
        echo " - " . $user["usuario"] . "<br>";
    }
}

for($i = 0; $i < count($usuarios); $i++){
    if($usuarios[$i]["rol"] == "editor"){
        $usuarios[$i]["activo"] = false;
    }
}

echo "Usuarios con activos:<br>";
foreach($usuarios as $user){
    if($user["activo"]){
        echo " - " . $user["usuario"] . "<br>";
    }
}