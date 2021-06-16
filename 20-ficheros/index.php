<?php

// abrir un archivo... modo, r = lectura, w = escritura, x=ejecucion, a+ lectura y escritura
$archivo = fopen("fichero_texto.txt", "a+");

/*
while (!feof($archivo)) {
    //leer archivo
    $contenido = fgets($archivo);

    echo "<h1>" . $contenido . "</h1>";
}

//escribir en un archivo
fwrite($archivo, "<br>texto agregado desde php");

//Cerrar archivo
fclose($archivo);
*/
//Copiar
//copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");

//renombrar
//rename('fichero_copiado.txt','nombre_cambiado.txt');

//Eliminar
//unlink('nombre_cambiado.txt')or die("Error al borrar");

if(file_exists("fichero_texto.txt")){
    echo "<h1>El archivo existe</h1>";
}else{
    echo "EL ARCHIVO NO EXISTE";
    
}