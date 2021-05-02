
<?php
require_once 'includes/head.php'; // esta opcion es igual a include, con la unica diferencia
                             // require detiene toda la ejecucion, si hay un error
                             // include, permite la ejecucion parcial del codigo.
                             // require_once, permite la inclusion de solo 1 vez el codigo.
?>  

        <!--Contenido-->
        <div>
            <h2>Esta es la pagina de Inicio</h2>
            <p>Este es un texto de prueba de la página</p>
            <hr>
        </div>
        <!--footer-->
<?php
include 'includes/footer.php';
?>