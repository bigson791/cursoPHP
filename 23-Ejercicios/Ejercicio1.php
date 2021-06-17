<?php

/* 
 * Ejercicio No.1
 * Crear una sesion que aumente su valor en uno o disminuya en uno
 * en funcion de si el parametro get counter, esta a uno, o 0. 
 */

// iniciando la sesion.
session_start();

// verificando si la sesion existe, si no existe la creara.

if(!isset(session["numero"])){
    $_SESSION['numero']=0;
}
// verificando si el parametro get, trae el valor conuter = 1;.

if(isset($_GET['counter']) && $_GET['counter']==1)
    $_SESSION['numero']++;
// verificando si el parametro get, trae el valor conuter = 0;.

if(isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesion numero es:<?$_SESSION['numero'];?> </h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a><br>
