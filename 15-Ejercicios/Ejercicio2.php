<?php

/* 
Escribir un programa en php, que añada valores a un array, mientras su valor sea < 120
 * y luego mostrar su contenido por pantalla
 */

$letras = array();

for ($i=0; $i<120; $i++){
    array_push($letras,"elemento-".$i."<br>");
}

echo var_dump($letras);