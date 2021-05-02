<?php

/* 
 */

//debuggear para buscar errores0
$nombre=">Elfego Apen";

var_dump($nombre);
echo "<hr>";
//fecha
echo date('d-M-y');
echo "<hr>";

echo time();//timestapn
echo "<hr>";

//Matematicas

//faiz cuadrada
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<hr>";

// numero aleatorio

echo "numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<hr>";

// numero pi

echo "Numero Pi: ".pi();
echo "<hr>";

//redondeo de numeros

echo "Redondear: ".round(7.859615,0);

// Mas funciones generales.
// detectar tipado
echo gettype($nombre);
echo "<hr>";
if(is_string($nombre)){
    echo 'esta variable es un string';
}else{
    echo "la variable $nombre no es un numero con decimales";
}
echo "<hr>";
// verificar si una variable existe
if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

// funcion trim, limpia los espacios innecesarios de una frase

$frase="            hola mundo";

echo $frase;echo "<hr>";

var_dump($frase);
echo "<hr>";
// limpiar espacios
trim($frase);
echo "<hr>";
var_dump(trim($frase));

// Eliminar variables / indices de array

$year=2020;
echo "<hr>";
unset($year);

var_dump($year);

// comprobar variable vacia

$texto="    ";

if(empty(trim($texto))){
    echo "La variable esta vacia";
}else{
    echo "La variable tiene contenido";
}

// contar caracteres de una cadena(string)

$cadena="12345";
echo "<hr>";
echo strlen($cadena);

//encuentra un caracter en una posicion determinada

$frases="La vida es bella";

echo "<hr>";
echo strpos($frases, "vida");

//reemplazar contenidos de un string
echo "<hr>";
echo $frases= str_replace("vida", "moto",$frases);

// convierte a mayusculas o minusculas.
echo "<hr>";
echo strtolower($frases);
echo "<hr>";
echo strtoupper($frases);