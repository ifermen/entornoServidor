<?php
/*
23.- Dado el array con información de películas:
$peliculas = [
 ["titulo" => "Inception", "director" => "Nolan", "anio" => 2010,
"duracion" => 148],
 ["titulo" => "Interstellar", "director" => "Nolan", "anio" => 2014,
"duracion" => 169],
 ["titulo" => "Memento", "director" => "Nolan", "anio" => 2000,
"duracion" => 113],
 ["titulo" => "Titanic", "director" => "Cameron", "anio" => 1997,
"duracion" => 195],
];
- Muestra todas las películas dirigidas por Nolan.
- Calcula la duración media de las películas.
- Ordena las películas por año de estreno ascendente.
*/

$peliculas = [
 ["titulo" => "Inception", "director" => "Nolan", "anio" => 2010, "duracion" => 148],
 ["titulo" => "Interstellar", "director" => "Nolan", "anio" => 2014, "duracion" => 169],
 ["titulo" => "Memento", "director" => "Nolan", "anio" => 2000, "duracion" => 113],
 ["titulo" => "Titanic", "director" => "Cameron", "anio" => 1997, "duracion" => 195],
];

foreach($peliculas as $movie){
    if($movie["director"] == "Nolan"){
        echo $movie["titulo"] . "<br>";
    }
}

$durationSum = 0;
foreach($peliculas as $movie){
    $durationSum = $durationSum + $movie["duracion"];
}

echo "Duración media: " . ($durationSum/count($peliculas)) . "<br>";

usort($peliculas, function ($a,$b){
    return $a["anio"] - $b["anio"];
});

foreach($peliculas as $movie){
    echo $movie["titulo"] . " - " . $movie["anio"] . "<br>";
}