<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    //echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'},$c{'tipo'},$c{'fechanacimiento'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

    function showUsuario($idusuario) {
    $row = self::$db->getRows("SELECT * FROM usuario WHERE id= ?",array("{$idusuario}"));
    $ObjUsuario= new Usuario($row[0]{'id'}, $row[0]{'nombreusuario'}, $row[0]{'clave'}, $row[0]{'descripcion'},$row[0]{'persona_id'});

    return $ObjUsuario;        
  }



      function showUsuarioByName($nombreusuario) {
  $rows = self::$db->getRows("SELECT * FROM usuario ");        
    //echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'},$c{'tipo'},$c{'fechanacimiento'});
      array_push($arrayUsuario, $aux);
    }
    return $aux;        
  }

      function updateUsuario($idusuario,$nombre,$tipo,$fechanacimiento) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre = ? , tipo = ? , fechanacimiento = ? WHERE idusuario = ?", array("{$nombre}", "{$tipo}", "{$fechanacimiento}",$idusuario));  
      
  }

      function deleteUsuario($idusuario) {
    $insertrow = self::$db->deleteRow("DELETE FROM public.usuario WHERE idusuario=?",array("{$idusuario}"));
      
  }

      function insertarUsuario($nombre,$tipo,$fechanacimiento) {
    $insertrow = self::$db->insertRow("INSERT INTO usuario (nombre, tipo, fechanacimiento) VALUES (?,?,?)",array("{$nombre}","{$tipo}", "{$fechanacimiento}"));
      
  }

}
?>