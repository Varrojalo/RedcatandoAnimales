<?php
class Diagnostico
{
    private $cod;
    private $codAnimal;
    private $descripcion;
    private $tratamiento;
    private $fecha;

    public function __construct($cod, $codAnimal, $descripcion,$tratamiento, $fecha)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->codAnimal = is_null($codAnimal)?$this->codAnimal:$codAnimal;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
        $this->tratamiento = is_null($tratamiento)?$this->tratamiento:$tratamiento;
        $this->fecha = is_null($fecha)?$this->fecha:$fecha;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getCodAnimal(){
        return $this->codAnimal;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getTratamiento(){
        return $this->tratamiento;
    }
    public function getFecha(){
        return $this->fecha;
    }
    
    
    

    public function setCod($codigo){
        $this->cod = $codigo;
    }
    public function setCodAnimal($codAnimal){
        $this->codAnimal = $codAnimal;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setTratamiento($tratamiento){
        $this->tratamiento = $tratamiento;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    
    
    
}
?>