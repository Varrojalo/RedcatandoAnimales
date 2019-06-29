<?php
class Especie
{
    private $id;
    private $nombre;
    
    public function __construct($id, $nombre)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getID()
    {
        return $this->codigo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>