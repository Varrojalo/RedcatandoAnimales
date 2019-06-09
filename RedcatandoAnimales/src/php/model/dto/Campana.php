<?php
class Campana
{
    private $cod;
    private $codOrganizacion;
    private $fechaInicio;
    private $fechaTermino;
    private $descripcion;
    private $tipo;

    public function __construct($cod, $codOrganizacion, $fechaInicio,$fechaTermino, $descripcion, $tipo)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->codOrganizacion = is_null($codOrganizacion)?$this->codOrganizacion:$codOrganizacion;
        $this->fechaInicio = is_null($fechaInicio)?$this->fechaInicio:$fechaInicio;
        $this->fechaTermino = is_null($fechaTermino)?$this->fechaTermino:$fechaTermino;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
        $this->tipo = is_null($tipo)?$this->tipo:$tipo;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getCodOrganizacion(){
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
        $this->cod = $codigo;
    }
    public function setCodOrganizacion($codOrganizacion){
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