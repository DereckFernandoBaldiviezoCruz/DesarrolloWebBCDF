<?php
class pila{

    private $datos;
    public function insertar($item){
        $this->datos = array();
    }
    public function eliminar(){
        if ($this->vacio()){
            return null;
        }
        return array_pop($this->datos);
    }

    public function show(){
        return $this->datos;
    }
    public function vacio(){
        return empty($this->datos);
    }
}