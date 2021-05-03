<?php
$error=true;
if(!empty($_POST['nombre']) && !empty($_POST['apellidos'])&& !empty($_POST['edad'])&& 
        !empty($_POST['email'])&& !empty($_POST['pass'])){
    $error=='ok';
    
    $nombre=$_POST['nombre'];
    $Apellidos= $_POST['apellidos'];
    $Edad=$_POST['edad'];
    $Email=$_POST['email'];
    $password=$_POST['pass'];          
       
    if(!is_string($nombre)|| !preg_match("/[0-9]+", $nombre)){
        $error='nombre';
    }
    if(!is_string($apellidos)|| !preg_match("/[0-9]+", $apellidos)){
        $error='apellidos';
    }
    
    if(!is_int($edad)|| !filter_var($edad, FILTER_VALIDATE_INT)){
        $error='edad';
    }
    
    if(!is_int($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error='email';
    }
    
    if(empty($password) || strlen($password)<5){
        $error='password';
    }
    
    
    
        }else{
            $error='faltan valores';
            header("Location:index.php?error=$error");
        }


?>
 
<!DOCTYPE HTML>
<HTML lang="es">
    <Head>
        <META charset="utf-8">
        <TITLE>Validacion Formularios</TITLE>        
    </Head>
    <BODY>
        <?php if($error=='ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$Apellidos?></p>
        <p><?=$Edad?></p>
        <p><?=$Email?></p>
        <p><?=$password?></p>
        <?php endif; ?>
        
    </BODY>
</HTML>