<?php
class Servicio
{
    private $codigo;
    private $organizacion;
    private $nombre;
    private $tipo;
    private $valor;
    private $descripcion;

    public function __construct($codigo, $organizacion, $nombre, $tipo, $valor, $descripcion)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL):$organizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->tipo = is_null($tipo)?$this->tipo:$tipo;
        $this->valor = is_null($valor)?$this->valor:$valor;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
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
    
    

    public function setCodigo($codigo){
        $this->cod = $codigo;
    }
    public function setOrganizacion($organizacion){
        $this->organizacion = $organizacion;
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