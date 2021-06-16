<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir Archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <!-- Botones para subir el archivo al servidor -->
            <input type="file" name="archivo">
            <input type="submit" name="Enviar">
        </form>
        
    </body>
</html>