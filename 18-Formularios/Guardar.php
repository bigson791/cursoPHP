<?php

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    
    echo "<h1>".$_POST['titulo']."</h>";
    echo "<h1>".$_POST['descripcion']."</h>";       
            
}