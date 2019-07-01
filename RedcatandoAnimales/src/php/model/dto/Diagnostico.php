<?php
class Diagnostico
{
    private $id;
    private $organizacion;
    private $animal;
    private $nombre;
    private $descripcion;

    public function __construct($id,$organizacion,$animal,$nombre,$descripcion)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->animal = is_null($animal)?new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$animal;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL,NULL):$organizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getID(){
        return $this->id;
    }
    public function getCodigoAnimal(){
        return $this->animal->getID();
    }
    public function getCodigoOrganizacion(){
        return $this->organizacion->getID();
    }
    public function getOrganizacion(){
        return $this->organizacion;
    }
    public function getAnimal(){
        return $this->animal;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getNombre(){
        return $this->nombre;
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
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    
    
    
}
?>