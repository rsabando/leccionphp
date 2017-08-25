 <?php
 $nombre= $_POST["nombre"];
 $tipo= $_POST["tipo"];
 $fechanacimiento= $_POST["fechanacimiento"];
 include_once("UsuarioCollector.php");
 $UsuarioCollectorObj = new UsuarioCollector();
 $UsuarioCollectorObj->insertarUsuario($nombre,$tipo,$fechanacimiento);

 echo "Usuario: ".$nombre." creado correctamente". "</br>";
?>
<a href="index.php">Volver</a>