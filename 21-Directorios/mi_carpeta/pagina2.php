<?php

if(!is_dir('mi_carpeta')){
    
mkdir('mi_carpeta', 0777) or die ('NO SE PUDO CREAR LA CARPETA');    
   echo "carpeta creada";
}else{
    
    echo "la carpeta ya existe";
}

//rmdir('mi_carpeta');

echo "<hr><h1>Contenido de la carpeta</h1>";
if($gestor = opendir('./mi_carpeta')){

    while (false !==($archivo= readdir($gestor))){
        if($archivo !='.'&& $archivo !='..'){
            echo $archivo."<br/>";
        }
    } 
}