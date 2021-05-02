<?php

// para mostrar el valor de una cookie, se debe usar la variable superglobal
//$_cookie, el cual es un array asociativo

/** @var type $_COOKIE */
if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo 'no existe la cookie';
}
if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo 'no existe la cookie';
}


?>
<a href="index.php">crear las galletas</a>
<a href="borrar_cookies.php">Eliminar las galletas</a>

