<?php
include_once "Dueño.php";
include_once "Organizacion.php";
include_once "Raza.php";
class Animal
{
    private $id;
    private $raza;
    private $organizacion;
    private $user;
    private $chip;
    private $nombre;
    private $patron;
    private $fechaNacimiento;
    private $sexo;
    private $observacion;
    private $esterilizado;
    private $estado;
    private $created_at;
    private $updated_at;

    public function __construct($id,$raza,$organizacion,$user,$chip,$nombre,$patron,$fechaNacimiento,$sexo,$observacion,$esterilizado,$estado,$created_at,$updated_at) {
        $this->id = is_null($id)?$this->id:$id;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL,NULL):$organizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->user = is_null($user)?$this->nombre:$nombre;
        $this->fechaNacimiento = is_null($fechaNacimiento)?$this->fechaNacimiento:$fechaNacimiento;
        $this->raza = is_null($raza)?new Raza(NULL,NULL,NULL):$raza;
        $this->patron = is_null($patron)?$this->patron:$patron;
        $this->sexo = is_null($sexo)?$this->sexo:$sexo;
        $this->observacion = is_null($observacion)?$this->observacion:$observacion;
        $this->chip = is_null($chip)?$this->chip:$chip;
        $this->esterilizado = is_null($esterilizado)?$this->esterilizado:$esterilizado;
        $this->estado = is_null($estado)?$this->estado:$estado;
        $this->created_at = is_null($created_at)?$this->created_at:$created_at;
        $this->updated_at = is_null($updated_at)?$this->updated_at:$updated_at;
    }


    public function getID(){
        return $this->id;
    }
    
    public function getCodigoOrganizacion(){
        return $this->organizacion->getID();
    }
    public function getOrganizacion(){
        return $this->organizacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
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
    public function getFechaIngreso(){
        return $this->created_at;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function isEsterilizado(){
        return $this->esterilizado;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setCodigoDueño($codDueño){
        $this->codDueño = $codDueño;
    }
    public function setDueño($dueño)
    {
        $this->dueño = $dueño;
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