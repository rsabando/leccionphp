
<?php

include_once("UsuarioCollector.php");


$UsuarioCollectorObj = new UsuarioCollector();
echo "Usuarios";
echo "</br>";
echo "</br>";
foreach ($UsuarioCollectorObj->showUsuarios() as $c){

  echo "<div>";
  echo $c->getIdUsuario() . "  && " .$c->getNombre(). "  && " .$c->getTipo(). "  && " .$c->getfechanacimiento();
  echo "<a href='formularioUsuarioEditar.php?idusuario=".$c->getIdUsuario(). "&nombre=" .$c->getNombre()."'>Perfil </a>";
 // echo "<a href='eliminar.php?idusuario=".$c->getIdUsuario()."&nombre=".$c->getNombre()."'>Eliminar </a>";                                      
  echo "</div>";
}
echo "</br>";
 echo "<a href='formularioNuevoUsuario.php'>Nuevo </a>";
?>