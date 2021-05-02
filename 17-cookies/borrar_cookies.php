<?php
if($_COOKIE['micookie']){
unset($_COOKIE['micookie']); // eliminar una cookie
setcookie('micookie', '', time()-100);
}

header('location:ver_cookies.php'); // redirecciona paginas.