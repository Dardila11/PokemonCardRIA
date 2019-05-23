<?php

class Pokemon {
    
    public $id = 0;
    public $nombre = null;
    public $fuerza = null;
    public $velocidad = null;
    public $tipoEvolucion = null;
    public $tipo = null;
    public $imagen = null;
    
    public function __construct($id, $nombre, $fuerza, $velocidad, $tipoEvolucion, $tipo, $imagen){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fuerza = $fuerza;
        $this->velocidad = $velocidad;
        $this->tipoEvolucion = $tipoEvolucion;
        $this->tipo = $tipo;
        $this->imagen = $imagen;   
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getFuerza(){
        return $this->fuerza;
    }
    
    public function setFuerza($fuerza){
        $this->fuerza = $fuerza;
        return $this;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
        return $this;
    }
    public function getTipoEvolucion(){
        return $this->tipoEvolucion;
    }
    
    public function setTipoEvolucion($tipoEvolucion){
        $this->tipoEvolucion = $tipoEvolucion;
        return $this;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }
    
    public function getImg(){
        return $this->imagen;
    }
    
    public function setImagen($imagen){
        $this->imagen = $imagen;
        return $this;
    }
}
?>