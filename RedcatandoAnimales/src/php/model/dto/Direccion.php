<?php
class Direccion
{
    private $cod;
    private $codDuenio;
    private $numero;
    private $calle;
    private $descripcion;
    

    public function __construct($cod, $codDuenio, $numero, $calle, $descripcion)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->codDuenio = is_null($codDuenio)?$this->codDuenio:$codDuenio;
        $this->numero = is_null($numero)?$this->numero:$numero;
        $this->calle = is_null($calle)?$this->calle:$calle;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getCodAnimal(){
        return $this->codDuenio;
    }
    
    public function getNumero(){
        return $this->numero;
    }
    public function getCalle(){
        return $this->calle;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    
    

    public function setCod($codigo){
        $this->cod = $codigo;
    }
    public function setCodDuenio($codDuenio){
        $this->codDuenio = $codDuenio;
    }
    
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setCalle($calle){
        $this->calle = $calle;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    
    
    
}
?>