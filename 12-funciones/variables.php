<?php

/* 
 *      Variables locales:
 *      son las que se definen dentro de  una funcion y no pueden ser usadas
 *      fuera de la funcion, solo estan disponibles dentro, a no ser que hagamos
 *      un return.
        Variables globales:
 *      son las que se declaran fuera de una funcion y estan disponibles dentro
 *      y fuera  de las funciones
 *  */


//VARIABLE GLOBAL
$frase = "Ni los genios, son tan genios, ni los mediocres tan mediocres";

echo $frase; // variable global

function holaMundo(){
    global $frase;
    echo "<H1>$frase</h1>";
    $year=2020; //variable local
    echo "<H1>$year</h1>";
    
   return $year;
}

echo holaMundo();

//funciones variables

function buenasDias(){
    return "Hola, buenos dias";
}


function buenasTardes(){
    return "Hey, que tal ha ido la comida??";
}

function buenasNoches(){
    return "¿ya te vas a dormir? buenas Noches!!!";
}

$horario=$_GET['horario'];

$miFuncion = "buenas".$horario;

echo $miFuncion();