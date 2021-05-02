<?php

/* 
 * cookie: es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo
 * en la web.
 */

//crear una cookie

//setcookie("nombre","valor que debe llevar, solo puede ser texto",caducidad,ruta,dominio);

//cookie basica

setcookie("micookie","valor de mi galleta");

//cookie con expiracion

setcookie("unyear","valor de la galleta de 365 días", time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>
