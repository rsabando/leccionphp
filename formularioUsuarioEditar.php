<?php

$id= $_GET["idusuario"];
include_once("UsuarioCollector.php");
//print_r($id);
//include_once("Usuario.php");
$UsuarioCollectorObj = new UsuarioCollector();
$ObjUsuario = $UsuarioCollectorObj->showUsuarioByName($id);
//print_r($ObjUsuario);
?>


 <!DOCTYPE html>

<html lang="es">
<header>

</header>

    <head>       
        <meta charset="utf-8">
        <title>Inicio</title>
    </head>

<body>

<h2>Perfil</h2>

<form action="actualizar.php" method="post">

<fieldset>


<label>Id: </label>

<input readonly type="text" name="idusuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" />

<br/> <br/>

<label>Nombre: </label>

<input type="text" name="nombre" value="<?php echo $ObjUsuario->getNombre(); ?>" />

<br/> <br/>

<label>Tipo: </label>

<input type="text" name="tipo" value="<?php echo $ObjUsuario->getTipo(); ?>" />

<br/> <br/>

<label>Tipo: </label>

<input type="text" name="fechanacimiento" value="<?php echo $ObjUsuario->getFechaNacimiento(); ?>" />

<br/> <br/>


<button type="submit">Actualizar</button>
  <?php echo "<a href='eliminar.php?idusuario=".$ObjUsuario->getIdUsuario()."&nombre=".$ObjUsuario->getNombre()."'>Eliminar </a>";?>                                   


</fieldset>

</form>
<?php echo "</br>";?>
<a href="index.php">Cancelar</a>


</body>

</html>