<?php

$cantantes = ['Juan Gabriel','Luis Miguel','Becky G'];
$numeros = ['0','2','1','4','3','9','5','8','7','6'];

//ordenar
arsort($cantantes); // ordena descendete
sort($numeros); // ordena ascendente

var_dump($cantantes);
echo "<br>";
var_dump($numeros);

// añadir elementos a un array

$cantantes[] = 'Bad Bunny';
echo "<br>";
var_dump($cantantes);

//array push, para añadir un nuevo elemento al array

array_push($cantantes,'El Buki');
var_dump($cantantes);
//array pop, para eliminar el ultimo elemento ingresado al array
echo "<br>";
array_pop($cantantes);
var_dump($cantantes);

unset($numeros[5]);
echo "<br>";
var_dump($numeros);

//sacar un elemento aleatorio de un array
echo "<br>";
$indice= array_rand($cantantes);

echo $cantantes[$indice];

//dar la vuelta a un array
echo "<br>";
var_dump(array_reverse($numeros));

//buscar en un array
echo "<br>";
$resultado=array_search('Bad Bunny',$cantantes);
var_dump($resultado);

//contar numero de elementos

echo count($cantantes);

echo sizeof($cantantes);