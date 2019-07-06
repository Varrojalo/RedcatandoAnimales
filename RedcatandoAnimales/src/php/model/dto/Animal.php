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
    private $url;
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

    public function __construct($id,$raza,$organizacion,$user,$url,$chip,$nombre,$patron,$fechaNacimiento,$sexo,$observacion,$esterilizado,$estado,$created_at,$updated_at) {
        $this->id = is_null($id)?$this->id:$id;
        $this->organizacion = is_null($organizacion)?new Organizacion(NULL,NULL,NULL):$organizacion;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->user = is_null($user)?$this->nombre:$nombre;
        $this->url = is_null($url)?$this->url:$url;
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

    public function getRaza()
    {
        return $this->raza;
    }

    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setID($id)
    {
        $this->id = $id;
    }
    
    public function getOrganizacion()
    {
        return $this->organizacion;
    }
    public function getCodigoOrganizacion()
    {
        return $this->organizacion->getID();
    }
    public function setOrganizacion($organizacion)
    {
        $this->organizacion = $organizacion;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getURL()
    {
        return $this->url;
    }

    public function setURL($url)
    {
        $this->url = $url;
    }

    public function getChip()
    {
        return $this->chip;
    }

    public function setChip($chip)
    {
        $this->chip = $chip;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPatron()
    {
        return $this->patron;
    }

    public function setPatron($patron)
    {
        $this->patron = $patron;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getObservacion()
    {
        return $this->observacion;
    }

    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    public function isEsterilizado()
    {
        return $this->esterilizado;
    }

    public function setEsterilizado($esterilizado)
    {
        $this->esterilizado = $esterilizado;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getFechaIngreso()
    {
        return $this->created_at;
    }

    public function setFechaIngreso($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getFechaActualizado()
    {
        return $this->updated_at;
    }

    public function setFechaActualizado($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
?>