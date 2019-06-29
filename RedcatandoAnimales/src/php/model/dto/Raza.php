<?php
include_once "Especie.php";
class Raza
{
    private $id;
    private $especie;
    private $nombre;
    
    public function __construct($id, $especie, $nombre)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->especie = is_null($especie)?new Especie(NULL,NULL):$especie;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getEspecie()
    {
        return $this->especie;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>