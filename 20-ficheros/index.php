<?php

// abrir un archivo... modo, r = lectura, w = escritura, x=ejecucion, a+ lectura y escritura
$archivo = fopen("fichero_texto.txt", "a+");


while (!feof($archivo)) {
    //leer archivo
    $contenido = fgets($archivo);

    echo "<h1>" . $contenido . "</h1>";
}

//escribir en un archivo
fwrite($archivo, "<br>texto agregado desde php");

//Cerrar archivo
fclose($archivo);
