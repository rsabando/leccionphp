<?php


class Usuario 
{
    private $idusuario;
    private $nombre;
    private $clave;
    private $tipo;
    private $fechanacimiento;
    
   

      function __construct($idusuario, $nombre, $clave, $tipo, $fechanacimiento) {


       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->clave = $clave;
       $this->tipo = $tipo;
       $this->fechanacimiento = $fechanacimiento;

     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $clave->clave;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
     function setFechaNacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechanacimiento;
     }
}

?> 