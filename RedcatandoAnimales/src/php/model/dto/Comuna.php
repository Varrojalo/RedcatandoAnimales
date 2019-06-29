<?php
include_once "Region.php";
class Comuna
{
    private $id;
    private $region;
    private $nombre;

    public function __construct($id,$region,$nombre) {
        $this->id = is_null($id)?$this->id:$id;
        $this->region = is_null($region)?new Region(NULL,NULL):$region;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>