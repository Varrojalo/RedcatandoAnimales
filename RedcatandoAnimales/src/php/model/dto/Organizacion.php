<?php
class Organizacion
{
    private $cod;
    private $nombre;

    public function __construct($cod, $nombre)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setCod($codigo){
        $this->cod = $codigo;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    
}
?>