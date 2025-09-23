<?php
/*
21. Dado este array con información sobre productos:
$productos = [
 ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
 ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
 ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
 ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
];
- Muestra solo los productos que tienen stock disponible (>0).
- Calcula el valor total de inventario (precio * stock sumados).
- Ordena el array por precio de mayor a menor y muéstralo.
*/

$productos = [
 ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
 ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
 ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
 ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
];

function showProductsWithStock(){
    global $productos;
    foreach($productos as $product){
        if($product["stock"]>0){
            echo $product["nombre"] . "<br>";
        }
    }
}

function inventoryTotalValue(){
    global $productos;
    $total = 0;
    foreach($productos as $product){
        $total = $total + ($product["precio"] * $product["stock"]);
    }

    return $total;
}

function sortByPrice(){
    global $productos;
    usort( $productos, function( $a, $b ){
        return $a['precio'] - $b['precio'];
    });

}

showProductsWithStock();

echo inventoryTotalValue() . "<br>";

sortByPrice();
foreach ($productos as $product){
    echo $product["nombre"] . "<br>";
}