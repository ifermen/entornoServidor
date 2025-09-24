<?php
/*
27.- Dado el siguiente array:
$pedidos = [
    ["id" => 1,"cliente" => "Ana","fecha" => "2025-07-01","total" => 120.50],
    ["id" => 2,"cliente" => "Luis","fecha" => "2025-07-25","total" => 75.00],
    ["id" => 3,"cliente" => "Carlos","fecha" => "2025-06-15","total" => 89.99],
    ["id" => 4,"cliente" => "María","fecha" => "2025-07-10","total" => 45.30],
    ["id" => 5,"cliente" => "Lucía","fecha" => "2025-07-28","total" => 150.00]
];
Se pide:
• Muestra solo los pedidos cuya fecha esté en el mismo mes y año que la
fecha actual.
• Para cada pedido, calcula y muestra cuántos días han pasado desde la
fecha del pedido hasta hoy.
• Ordena el array de pedidos por fecha descendente.
• Escribe una función que reciba dos fechas ($inicio, $fin) y devuelva un
array con los pedidos realizados entre esas fechas.
• Muestra solo los pedidos cuya fecha esté en los últimos 7 días desde hoy
*/

$pedidos = [
    ["id" => 1,"cliente" => "Ana","fecha" => "2025-07-01","total" => 120.50],
    ["id" => 2,"cliente" => "Luis","fecha" => "2025-07-25","total" => 75.00],
    ["id" => 3,"cliente" => "Carlos","fecha" => "2025-06-15","total" => 89.99],
    ["id" => 4,"cliente" => "María","fecha" => "2025-07-10","total" => 45.30],
    ["id" => 5,"cliente" => "Lucía","fecha" => "2025-07-28","total" => 150.00]
];