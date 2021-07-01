<?php
/*
 * Hacer una interfaz de usuario(formulario) con dos imputs
 * y cuatro botones, uno para sumar, uno para restar, uno para multiplicar
 * y otro para dividir.
 */
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $resultado = false;

    if (isset($_POST['sumar'])) {
        $resultado = "El resultado es :" . ($_POST['n1']+$_POST['n2']);
    }
    if (isset($_POST['restar'])) {
        $resultado = "El resultado es :" . ($_POST['n1']-$_POST['n2']);
    }
    if (isset($_POST['multiplicar'])) {
        $resultado = "El resultado es :" . ($_POST['n1']*$_POST['n2']);
    }
    if (isset($_POST['dividir'])) {
        

            $resultado = "El resultado es :" . ($_POST['n1']/$_POST['n2']);
            
        
      
    }
}
?>

<!DOCTYPE HTML>
<html lang="ES">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="" method="POST">
            <label for="n1">Número 1:</label>
            <input type="number" name="n1"><br>
            <label for="n2">Número 2:</label>
            <input type="number" name="n2">
            <br>
            <br>
            <input type="submit" value="SUMAR" name="sumar">
            <input type="submit" value="RESTA" name="restar">
            <input type="submit" value="MULTIPLICAR" name="multiplicar">
            <input type="submit" value="DIVIDR" name="dividir">

        </form>
<?php
if ($resultado != false):

    echo "<h2>$resultado</h2>";

endif;
?>
    </body>

</html>