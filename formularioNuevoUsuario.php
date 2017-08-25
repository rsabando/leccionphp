<!DOCTYPE html>

<html lang="es">
<header>

</header>

    <head>       
        <meta charset="utf-8">
        <title>Inicio</title>
    </head>

<body>


<br/> <br/>
<form action="crearUsuario.php" method="post">

<fieldset>

<label>Usuario: </label>

<input type="text" name="nombre">
<?php echo "</br>";?>

<label>Tipo: </label>

<input type="text" name="tipo">
<?php echo "</br>";?>
<label>Fecha Nacimiento: </label>

<input type="text" name="fechanacimiento">
<?php echo "</br>";?>


<button type="submit"> Enviar</button>

</fieldset>

</form>
<a href="index.php">volver</a>
</body>

</html>