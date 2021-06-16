<!DOCTYPE HTML>
<HTML lang="es">
    <Head>
        <META charset="utf-8">
        <TITLE>Validacion Formularios</TITLE>
    </Head>
    <BODY>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                
               if($error=='faltan valores'){
                   
                   echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
               }
               if($error=='nombre'){
                   
                   echo '<strong style="color:red">introduce un nombre valido</strong>';
               }
               if($error=='apellidos'){
                   
                   echo '<strong style="color:red">un apellido valido</strong>';
               }
               if($error=='edad'){
                   
                   echo '<strong style="color:red">Introduce una edad valida</strong>';
               }
               if($error=='email'){
                   
                   echo '<strong style="color:red">Introduce un email valido</strong>';
               }
               if($error=='password'){
                   
                   echo '<strong style="color:red">Introduce una contraseña valida</strong>';
               }
            }
        ?>
        
        <H1>Validar formularios en PHP</H1>
        <FORM method="post" action="procesar_formulario.php">
            <LABEL for="nombre">Nombre</LABEL><br>
            <INPUT type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><BR>
            
            <LABEL for="nombre">Apellidos</LABEL><br>
            <INPUT type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><BR>
            
            <LABEL for="nombre">Edad</LABEL><br>
            <INPUT type="text" name="edad" required="required" pattern="[0-9]+"><BR>
            
            <LABEL for="nombre">Email</LABEL><br>
            <INPUT type="email" name="email" required="required" ><BR>
            
            <LABEL for="nombre">Contraseña</LABEL><br>
            <INPUT type="password" name="pass"><BR>
   
            <INPUT type="submit" value="Enviar"><BR>
            
        </FORM>
    </BODY>
    
</HTML>