<?php
/*
26. Dato el siguiente array
$productos = [
    ["id" => 101, "nombre" => "Teclado mecánico", "precio" => 59.99, "stock" => 10, "categoria" => "Periféricos"],
    ["id" => 102, "nombre" => "Monitor 24 pulgadas", "precio" => 129.90, "stock" => 5, "categoria" => "Monitores"],
    ["id" => 103, "nombre" => "Ratón inalámbrico", "precio" => 19.50, "stock" => 0, "categoria" => "Periféricos" ],
    ["id" => 104, "nombre" => "Disco SSD 1TB", "precio" => 89.00, "stock" => 2, "categoria" => "Almacenamiento"],
    ["id" => 105, "nombre" => "Base refrigeradora", "precio" => 25.75, "stock" => 7, "categoria" => "Accesorios"]
];
Realiza los siguientes ejercicios:
• Recorre el array y muestra el nombre de todos los productos cuyo stock
sea igual a 0.
• Calcula el valor total del inventario (precio × stock de cada producto) y
muéstralo.
• Genera un nuevo array asociativo donde las claves sean las categorías y
los valores arrays de productos que pertenezcan a cada una.
• Recorre el array y devuelve el nombre y precio del producto más caro.
• Genera una tabla HTML que contenga solo los productos cuyo stock sea
mayor que cero, mostrando nombre, precio y stock.
*/

$productos = [
    ["id" => 101, "nombre" => "Teclado mecánico", "precio" => 59.99, "stock" => 10, "categoria" => "Periféricos"],
    ["id" => 102, "nombre" => "Monitor 24 pulgadas", "precio" => 129.90, "stock" => 5, "categoria" => "Monitores"],
    ["id" => 103, "nombre" => "Ratón inalámbrico", "precio" => 19.50, "stock" => 0, "categoria" => "Periféricos" ],
    ["id" => 104, "nombre" => "Disco SSD 1TB", "precio" => 89.00, "stock" => 2, "categoria" => "Almacenamiento"],
    ["id" => 105, "nombre" => "Base refrigeradora", "precio" => 25.75, "stock" => 7, "categoria" => "Accesorios"]
];

foreach ($productos as $product){
    if($product["stock"] == 0){
        echo $product["nombre"] . "<br>";
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

echo "Valor total: " . inventoryTotalValue() . "<br>";

$newArray = [];
foreach($productos as $product){
    if(!isset($newArray[$product["categoria"]])){
        $newArray[$product["categoria"]] = [];
    }
    $newArray[$product["categoria"]][] = $product;
}

echo "Productos por categoría: <br>";
foreach($newArray as $category => $products){
    echo " - " . $category . ":<br>";
    foreach($products as $product){
        echo "      · " . $product["nombre"] . "<br>";
    }
}

$mostEspensiveProduct = $productos[0];
foreach ($productos as $product){
    if($product["precio"] > $mostEspensiveProduct["precio"]){
        $mostEspensiveProduct = $product;
    }
}

echo "Producto más caro: " . $mostEspensiveProduct["nombre"] . " - " . $mostEspensiveProduct["precio"] . "€<br>";

$productWithStock = array_filter($productos,fn($product) => $product["stock"]>0);

?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoría</th>
    </tr>
    <?php
    foreach($productWithStock as $product){
    ?>
    <tr>
        <td><?=$product["id"]?></td>
        <td><?=$product["nombre"]?></td>
        <td><?=$product["precio"]?></td>
        <td><?=$product["stock"]?></td>
        <td><?=$product["categoria"]?></td>
    </tr>
    <?php
    }
    ?>
</table>