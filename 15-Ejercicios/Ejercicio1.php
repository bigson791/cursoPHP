<?php

/*
 * Realizar un array con 8 numeros, y que realice lo siguiente:
 * Recorrerlo para mostrar su contenido
 * ordenarlo y mostrarlo.
 * mostrar su longitud
 * buscar algun elemento
 */

//funciones para evitar repetir codigo

function recorrer($numeros) {
    $resultado = "";
    foreach ($numeros as $numero) {
        $resultado .= $numero . "<br>";
    }
    return $resultado;
}

$numeros = array('7', '5', '4', '2', '1', '0', '3', '6',);
echo "<h1>Contenido del Array</h1>";
echo recorrer($numeros);

echo "<h1>Contenido ordenado del array</h1>";
sort($numeros);
echo recorrer($numeros);
echo "<h1>Tamaño del Array</h1>";
echo count($numeros);
echo '<br>';

echo "<h1>contenido buscado dentro del array</h1>";
if (isset($_GET['buscador'])) {
    $buscador = $_GET['buscador'];

    $search = array_search($buscador, $numeros);

    if (!empty($search)) {
        echo "<h4>El numero buscado, existe en el array, en el indice: $search</h4>";
    } else {
        echo "El numero $buscador no existe en el array";
    }
}

