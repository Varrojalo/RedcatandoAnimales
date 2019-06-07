<?php
class Animal
{
    private $codigo = "anm-000";
    private $codDueño;
    private $codOrganizacion;
    private $nombre;
    private $edad;
    private $fechaInfreso;
    private $especie;
    private $raza;
    private $patron;
    private $sexo;
    private $observacion;
    private $chip;

    public function __construct($codigo, $codOrganizacion, $codDueño, $nombre, $edad, $fechaInfreso, $especie, $raza, $patron, $sexo, $observacion, $chip)
    {
        $this->codigo = is_null($codigo)?$this->codigo:$codigo;
        $this->codOrganizacion = is_null($codOrganizacion)?$this->codOrganizacion:$codOrganizacion;
        $this->codDueño = is_null($codDueño)?$this->codDueño:$codDueño;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->edad = is_null($edad)?$this->edad:$edad;
        $this->fechaInfreso = is_null($fechaInfreso)?$this->fechaInfreso:$fechaInfreso;
        $this->especie = is_null($especie)?$this->especie:$especie;
        $this->raza = is_null($raza)?$this->raza:$raza;
        $this->patron = is_null($patron)?$this->patron:$patron;
        $this->sexo = is_null($sexo)?$this->sexo:$sexo;
        $this->observacion = is_null($observacion)?$this->observacion:$observacion;
        $this->chip = is_null($chip)?$this->chip:$chip;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCodigoDueño(){
        return $this->codDueño;
    }
    public function getCodigoOrganizacion(){
        return $this->codOrganizacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getFechaIngreso(){
        return $this->fechaInfreso;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getRaza(){
        return $this->raza;
    }
    public function getPatron(){
        return $this->patron;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getObservacion(){
        return $this->observacion;
    }
    public function getChip(){
        return $this->chip;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setCodigoDueño($codDueño){
        $this->codDueño = $codDueño;
    }
    public function setCodigoOrganizacion($codOrganizacion){
        $this->codOrganizacion = $codOrganizacion;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setFechaIngreso($fechaInfreso){
        $this->fechaInfreso = $fechaInfreso;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
    }
    public function setRaza($raza){
        $this->raza = $raza;
    }
    public function setPatron($patron){
        $this->patron = $patron;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function setObservacion($observacion){
        $this->observacion = $observacion;
    }
    public function setChip($chip){
        $this->chip = $chip;
    } 

}
?>