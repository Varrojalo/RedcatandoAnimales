<?php
class Socio
{
    private $codigo;
    private $codOrganizacion;
    private $pass;
    private $nombre;
    private $apellido;
    private $cargo;
    
    function __construct($codigo, $codOrganizacion, $pass, $nombre, $apellido, $cargo)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->codOrganizacion = is_null($codOrganizacion)?$this->codOrganizacion:$codOrganizacion;
        $this->pass = is_null($pass)?$this->pass:$pass;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->apellido = is_null($apellido)?$this->apellido:$apellido;
        $this->cargo = is_null($cargo)?$this->cargo:$cargo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getCodOrganizacion(){
        return $this->codOrganizacion;
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

    public function setCodOrganizacion($codOrganizacion){
        $this->codOrganizacion = $codOrganizacion;
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