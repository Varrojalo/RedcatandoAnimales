<?php
class Diagnostico
{
    private $codigo;
    private $animal;
    private $descripcion;
    private $tratamiento;
    private $fecha;

    public function __construct($codigo, $animal, $descripcion,$tratamiento, $fecha)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->animal = is_null($animal)?new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$animal;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
        $this->tratamiento = is_null($tratamiento)?$this->tratamiento:$tratamiento;
        $this->fecha = is_null($fecha)?$this->fecha:$fecha;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCodigoAnimal(){
        return $this->animal->getCodigo();
    }
    public function getAnimal(){
        return $this->animal;
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
    
    
    

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setCodigoAnimal($codAnimal){
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