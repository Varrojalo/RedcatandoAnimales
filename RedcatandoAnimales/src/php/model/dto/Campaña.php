<?php
class Campaña
{
    private $codigo;
    private $codOrganizacion;
    private $fechaInicio;
    private $fechaTermino;
    private $descripcion;
    private $tipo;

    public function __construct($codigo, $codOrganizacion, $fechaInicio,$fechaTermino, $descripcion, $tipo)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->codOrganizacion = is_null($codOrganizacion)?$this->codOrganizacion:$codOrganizacion;
        $this->fechaInicio = is_null($fechaInicio)?$this->fechaInicio:$fechaInicio;
        $this->fechaTermino = is_null($fechaTermino)?$this->fechaTermino:$fechaTermino;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
        $this->tipo = is_null($tipo)?$this->tipo:$tipo;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCodigoOrganizacion(){
        return $this->codOrganizacion;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function getFechaTermino(){
        return $this->fechaTermino;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setCod($codigo){
        $this->codigo = $codigo;
    }
    public function setCodigoOrganizacion($codOrganizacion){
        $this->codOrganizacion = $codOrganizacion;
    }
    public function setFechaInicio($fechaInicio){
        $this->FechaInicio = $fechaInicio;
    }
    public function setFechaTermino($fechaTermino){
        $this->fechaTermino = $fechaTermino;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
}
?>