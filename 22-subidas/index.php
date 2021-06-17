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
        <h1>Listado de Imagenes</h1>

        <?php
        $gestor = opendir('./images');
        if ($gestor):
            while (($image = readdir($gestor)) !== false)://este tipo de sintaxis se usa cuando  va codigo php en una vista.
                if ($image != '.' && $image != '..'):
                    echo "<img src='images/$image' width='200px'/><br>";
                endif;//este tipo de sintaxis se usa cuando  va codigo php en una vista.
            endwhile;//este tipo de sintaxis se usa cuando  va codigo php en una vista.
        endif;//este tipo de sintaxis se usa cuando  va codigo php en una vista.
        ?>
    </body>
</html>