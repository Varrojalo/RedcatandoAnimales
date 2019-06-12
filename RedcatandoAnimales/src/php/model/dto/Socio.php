<?php
class Socio
{
    private $codigo;
    private $organizacion;
    private $pass;
    private $nombre;
    private $apellido;
    private $cargo;
    
    function __construct($codigo, $organizacion, $pass, $nombre, $apellido, $cargo)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL):$organizacion;
        $this->pass = is_null($pass)?$this->pass:$pass;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->apellido = is_null($apellido)?$this->apellido:$apellido;
        $this->cargo = is_null($cargo)?$this->cargo:$cargo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getCodigoOrganizacion(){
        return $this->organizacion->getCodigo();
    }
    public function getOrganizacion(){
        return $this->organizacion;
    }
    public function getPass(){
        return $this->pass;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function setOrganizacion($organizacion){
        $this->organizacion = $organizacion;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
}

?>