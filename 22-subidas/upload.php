<?php

/* recibiendo los archivos php
  se debera cambiar la configuracion de tamaño de archivo a subir en el servido
  en este caso xampp, post_max_size y upload_max_filesize, aca cambiamos para
  poder subir un mayor tamaño de archivo
  dataTime es para cambiar la zona de horario del servidor
 *  */

$archivo = $_FILES['file'];
var_dump($archivo);
die();

$nombre = $archivo['name'];
$tipo = $archivo['type'];

//comprobando si es una imagen con algunos de los parametrso validos
if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
//comprobando si hay una carpeta especifica para guardar la imagen
    if (!is_dir('images')) {
        //creando la carpeta para las imagenes
        mkdir('images', 0777);

        header("refresh: 6; URL=index.php "); // redirige a la pagina index.php
//moviendo el archivo de la carpeta temporal a la carpeta de imagenes.
        move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);

        echo "<h1>Imagen subida correctamente </h1>";
    }
} else {

    //redirige a la pagina indicada.
    header("refresh: 6; URL=index.php ");
    echo "por favor revisa el formato de la imagen";
}