<?php
class pila{

    private $elementos;
    private $tope;

    function __construct()
    {
        $this->elementos=array();
    }
    public function insertar($valor){
        $this->tope++; 
        $this->elementos[$this->tope] = $valor;
    }
    public function eliminar(){
        if ($this->vacio()){
            return null;
        }
        $valor = $this->tope;
        $this->tope--;
        return ($valor);

    }

    public function show(){
        return $this->elementos;
    }
    public function vacio(){
        return empty($this->elementos);
    }
}