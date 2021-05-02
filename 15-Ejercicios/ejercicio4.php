<?php

/* 
 crear un script en php que tenga 4 variables, array, string, int, boolena.
 */

$uno = array(1,2);
$dos = "texto";
$tres = 4;
$cuatro=true;

if(is_array($uno)){
    echo "<h1>la variable $uno es un array</h1>";
}
echo "<br>";
if(is_string($dos)){
    echo "<h1>la variable $dos es un string</h1>";
}
echo "<br>";
if(is_int($tres)){
    echo "<h1> la variable $tres es un entero</h1>";
}
echo "<br>";
if(is_bool($cuatro)){
    echo "<h1>la variable $cuatro es un booleano</h1>";
}