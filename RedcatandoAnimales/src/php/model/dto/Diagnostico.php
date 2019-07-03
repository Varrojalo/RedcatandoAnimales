<?php
class Diagnostico
{
    private $id;
    private $organizacion;
    private $nombre;
    private $descripcion;

    public function __construct($id,$organizacion,$nombre,$descripcion)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL,NULL):$organizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getID(){
        return $this->id;
    }
    public function getCodigoOrganizacion(){
        return $this->organizacion->getID();
    }
    public function getOrganizacion(){
        return $this->organizacion;
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