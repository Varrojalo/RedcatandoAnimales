<?php
class Organizacion
{
<<<<<<< HEAD
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
    
    
=======
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
>>>>>>> 76469fc7ab8a7e5545c1277a4780e0c543b6452d
}
?>