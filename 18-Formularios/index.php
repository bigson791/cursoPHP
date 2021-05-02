<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="Nombre">Nombre</label>
            <p> <input type="text" name="nombre"></p>
            <label for="Apellidos">Apellidos</label>
            <p> <input type="text" name="apellidos" autofocus="autofocus"></p>
            <label for="Boton">Boton</label>
            <p> <input type="button" name="boton" value="Clic Acá"></p>
            <label for="Genero">Genero</label>
            <p>Hombre <input type="checkbox" name="sexo" value="Hombre">
                Mujer<input type="checkbox" name="sexo" value="mujer">
                Otro<input type="checkbox" name="sexo" value="prefiero no decirlo"></p>
            <label for="color">Color</label>
            <p> <input type="color" name="color"></p>
            <label for="fecha">Fecha:</label>
            <p> <input type="date" name="fecha"></p>
            <label for="correo">Email:</label>
            <p> <input type="email" name="correo"></p>
            <label for="archivo">Archivo:</label>
            <p> <input type="file" name="archivo" multiple="multiple"></p>
            <label for="numero">Numero:</label>
            <p> <input type="number" name="numero"></p>
            <label for="password">Contraseña:</label>
            <p> <input type="password" name="password"></p>
            <label for="continente">Continente:</label>
            <p> 
                America<input type="radio" name="continente" value="America">
                Africa<input type="radio" name="continente" value="Africa">
                Asia<input type="radio" name="continente" value="Asia">
                Europa<input type="radio" name="continente" value="Europa">
                Oceania<input type="radio" name="continente" value="Oceania"></p>
            <label for="url">Pagina Web:</label>
            <p> <input type="url" name="url"></p>
            <textarea></textarea></br>
            Peliculas:
            <select>
                <option value="1">La Guerra de las Galaxias</option>
                <option value="2" >El Señor de los Anillos/option>
                <option value="3">The Avengers: The Ultron Age</option>
                <option value="4">Simpre a tu lado</option>
            </select><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>