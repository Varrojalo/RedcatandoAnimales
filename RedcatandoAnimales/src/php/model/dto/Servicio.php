<?php
class Servicio
{
    private $cod;
    private $codOrganizacion;
    private $nombre;
    private $tipo;
    private $valor;
    private $descripcion;

    public function __construct($cod, $codOrganizacion, $nombre, $tipo, $valor, $descripcion)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->codOrganizacion = is_null($codOrganizacion)?$this->codOrganizacion:$codOrganizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->tipo = is_null($tipo)?$this->tipo:$tipo;
        $this->valor = is_null($valor)?$this->valor:$valor;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getCodOrganizacion(){
        return $this->codOrganizacion;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getValor(){
        return $this->valor;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    

    public function setCod($codigo){
        $this->cod = $codigo;
    }
    public function setcodOrganizacion($codOrganizacion){
        $this->codOrganizacion = $codOrganizacion;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    
}
?>