<?php

/*
ARRAY
 * 
 * UN ARRAY ES UNA COLECCION O UN CONJUNTO DE DATOS / VALORES, BAJO UN SOLO NOMBRE 
    PARA ACCEDER A ESOS VALER PODEMOS USAR UN INDICE NUMERO O ALFANUMERICO.
 *  */

$pelicula = "Batman";

$peliculas = array('El señor de los anillos','The Avengers','Shrek');

var_dump($peliculas[1]);
echo "</br>";
$cantantes = ['Jenny Rivera','Miguel Gallardo','Katty Perry'];
var_dump($cantantes);
echo "</br>";
echo $peliculas[0];
echo "</br>";
echo $cantantes[0];

echo "<h1>Listado de peliculas</h1>";
//Los arrays se recorren con los ciclos for
echo "<ul>";
for($i=0;$i<count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";
echo "</br>";
//recorrer con bucle foreach
echo "<h1>Listado de Cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

$personas = array(
    'nombre'=>'Elfego',
    'apellido'=>'apen',
    'web'=>'floristeriasguate.com'
);

var_dump($personas['apellido']);
echo "<h1>Listado de valores</h1>";
echo "<ul>";
foreach ($personas as $valor) {
   echo "<li>".$valor."</li>"; 
}
echo "</ul>";

//arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antony',
        'mail' => 'antony@gmail.com' 
    ),
    array(
        'nombre' => 'Antony',
        'mail' => 'antony@gmail.com' 
    ),
    array(
        'nombre' => 'Antony',
        'mail' => 'antony@gmail.com' 
    ),
);

var_dump($contactos);

echo $contactos[1]['mail'];

foreach ($contactos as $key =>$contacto){
  echo "<br>";
    var_dump($contacto['nombre']);
}

//funciones para trabajar arrays
