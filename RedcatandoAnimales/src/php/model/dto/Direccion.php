<?php
class Direccion
{
    private $codigo;
    private $dueño;
    private $numero;
    private $calle;
    private $descripcion;
    

    public function __construct($codigo, $dueño, $numero, $calle, $descripcion)
    {
        $this->cod = is_null($codigo)?$this->cod:$codigo;
        $this->dueño = is_null($dueño)?new Dueño(NULL,NULL,NULL,NULL,NULL,NULL):$dueño;
        $this->numero = is_null($numero)?$this->numero:$numero;
        $this->calle = is_null($calle)?$this->calle:$calle;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCodigoDueño(){
        return $this->dueño->getCodigo();
    }
    public function getDueño(){
        return $this->dueño;
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
    
    
    

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setDueño($dueño){
        $this->dueño = $dueño;
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