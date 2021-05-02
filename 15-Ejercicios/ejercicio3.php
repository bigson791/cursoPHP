<?php

/* 
programa que compruebe si una variable esta vacia, y si lo esta,
 * se rellenara con texto en minuscula y mostrarlo en mayusculas y negrita.
 */

$frase="";

if($frase==""){
    $frase="aaaaaaaaaaaaaaaaaaaaa";
}else{
    echo "La variable no esta vacia";
}

echo "<strong>".strtoupper($frase)."</strong>";