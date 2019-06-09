<?php
class Organizacion
{
    private $codigo;
    private $nombre;

    public function __construct($codigo, $nombre)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>