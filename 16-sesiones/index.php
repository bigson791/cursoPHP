<?php
/*
 * Sesiones:
 * almacena y persiste datos del usuario mientras que navega en un sitio web
 * hasta que el usuario cierra sesion o el navegador, esto se almacena en el
 * servidor web.
 * 
 */
 
//iniciar la sesion

session_start();


//variable normal
$variable="hola soy una variable";
//variable sesion.
$_SESSION['variable_persistente']="hola soy una sesion activa";

echo $variable;
echo $_SESSION['variable_persistente'];

