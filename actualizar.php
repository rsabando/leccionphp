 <?php
 $idusuario= $_POST["idusuario"];
 $nombre= $_POST["nombre"];
 $tipo= $_POST["tipo"];
 $fechanacimiento= $_POST["fechanacimiento"];


 include_once("UsuarioCollector.php");
 $UsuarioCollectorObj = new UsuarioCollector();
 $UsuarioCollectorObj->updateUsuario($idusuario,$nombre,$tipo,$fechanacimiento);

 echo "Usuario:".$nombre." actualizado correctamente"."</br>";
?>
<a href="index.php">Volver</a>