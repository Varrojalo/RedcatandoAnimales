<?php
class Organizacion
{
    private $id;
    private $rut;
    private $nombre;

    public function __construct($id, $rut, $nombre)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->rut = is_null($rut)?$this->rut:$rut;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getRut()
    {
        return $this->rut;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setRut($rut)
    {
        $this->rut = $rut;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>