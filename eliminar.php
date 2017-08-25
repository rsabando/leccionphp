 <?php
 $idusuario= $_GET["idusuario"];
 $nombre= $_GET["nombre"];

 include_once("UsuarioCollector.php");
 $UsuarioCollectorObj = new UsuarioCollector();
 $UsuarioCollectorObj->deleteUsuario($idusuario);

 echo "El usuario id: ".$idusuario." ".$nombre." ha sido eliminado correctamente</br>";
?>
<a href="index.php">Volver</a>