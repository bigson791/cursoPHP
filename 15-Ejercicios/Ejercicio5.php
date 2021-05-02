 <?php
/*
 * Crear un array con el contendio de la tabla:
 * ACCION       AVENTURA        DEPORTES
 * GTA          ASSASSINS       FIFA 19
 * COD          CRASH           PES 19
 * PUGB         PRINCE OF       MOTO GP 19
 *              PERSIA
 */
 
 $tabla = array(
   
     'Accion' => array("GTA 5","Call of Duty","PUGB"),
     'Aventura'=> array("Assasins Creed","Crash Bandicoot","Prince of Persia"),
     'Deportes'=> array("Fifa 19","Pes 19","Moto GP 19")
 );
 
 //echo var_dump($tabla);
 $categorias= array_keys($tabla);
 ?>

    

 <table border="1">
     <?php      require_once 'ejercicio5/encabezado.php';?>
     <?php      require_once 'ejercicio5/primera.php';?>
     <?php      require_once 'ejercicio5/segunda.php';?>
     <?php      require_once 'ejercicio5/tercera.php';?>
     
</table>