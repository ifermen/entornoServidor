<?php
/*
25. Dado el siguiente array
$usuarios = [
 ["id" => 1, "nombre" => "Ana", "email" => "ana@example.com", "edad" => 28],
 ["id" => 2, "nombre" => "Luis", "email" => "luis@example.com", "edad" => 34],
 ["id" => 3, "nombre" => "María", "email" => "maria@example.com", "edad" => 22],
 ["id" => 4, "nombre" => "Carlos", "email" => "carlos@example.com", "edad" => 40]
 ];
Realiza los siguientes ejercicios:
• Muestra todos los correos electrónicos
• Imprime todos los correos electrónicos, uno por línea.
• Escribe una función que reciba el array de usuarios y un nombre, y devuelva
el array del usuario si lo encuentra, o null si no. Muestra el resultado de la
función en el navegador.
• Calcula e imprime la edad media de todos los usuarios.
• Crea un nuevo array que contenga solo los usuarios cuya edad sea mayor de
30 años. Muestra dicho array.
• Genera una tabla HTML con los campos id, nombre, email y edad.
*/

$usuarios = [
 ["id" => 1, "nombre" => "Ana", "email" => "ana@example.com", "edad" => 28],
 ["id" => 2, "nombre" => "Luis", "email" => "luis@example.com", "edad" => 34],
 ["id" => 3,"nombre" => "María","email" => "maria@example.com","edad" => 22],
 ["id" => 4,"nombre" => "Carlos","email" => "carlos@example.com","edad" => 40]
 ];

echo "Todos los correos:<br>";
foreach($usuarios as $user){
    echo " - " . $user["email"] . "<br>";
}

function searchUser($users,$userName){
    $userFound = [];
    $found = false;
    for($i = 0; $i < count($users) && !$found; $i++){
        if($users[$i]["nombre"] == $userName){
            $userFound = $users[$i];
            $found = true;
        }
    }
    return $userFound;
}

echo searchUser($usuarios,"Luis")["nombre"] . "<br>";

$sum = 0;
foreach($usuarios as $user){
    $sum = $sum + $user["edad"];
}

echo "Edad media: " . ($sum / count($usuarios)) . "<br>";

$newArray = array_filter($usuarios,fn($usuario)=> $usuario["edad"]>30);

echo "Datos del nuevo array:<br>";
foreach($newArray as $user){
    echo " - " . $user["nombre"] . "<br>";
}

?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
    </tr>
    <?php
    foreach($usuarios as $user){
    echo "<tr>";
        echo "<td>" . $user["id"] . "</td>";
        echo "<td>" . $user["nombre"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "<td>" . $user["edad"] . "</td>";
    echo "</tr>";
    }
    ?>
</table>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
    </tr>
    <?php
    foreach($usuarios as $user){
    ?>
    <tr>
        <td><?=$user["id"]?></td>
        <td><?=$user["nombre"]?></td>
        <td><?=$user["email"]?></td>
        <td><?=$user["edad"]?></td>
    </tr>
    <?php
    }
    ?>
</table>