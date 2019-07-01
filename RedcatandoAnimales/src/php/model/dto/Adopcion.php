<?php
include_once "Animal.php";
include_once "Adoptante.php";
include_once "User.php";

class Adopcion
{
    private $id;
    private $animal;
    private $adoptante;
    private $user;
    private $fechaAdopcion;
    private $cancelada;

    public function __construct($id,$animal,$adoptante,$user,$fechaAdopcion,$cancelada) {
        $this->id = is_null($id)?$this->id:$id;
        $this->animal = is_null($animal)?new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$animal;
        $this->adoptante = is_null($adoptante)?new Adoptante(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$adoptante;
        $this->user = is_null($user)?new User(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$user;
        $this->fechaAdopcion = is_null($fechaAdopcion)?$this->fechaAdopcion:$fechaAdopcion;
        $this->cancelada = is_null($cancelada)?$this->cancelada:$cancelada;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getAnimal()
    {
        return $this->animal;
    }
    public function getAdoptante()
    {
        return $this->adoptante;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getFechaAdopcion()
    {
        return $this->fechaAdopcion;
    }
    public function isCancelada()
    {
        return $this->cancelada;
    }

    public function setID($id)
    {
        $this->id = is_null($id)?$this->id:$id;
    }
    public function setAnimal($animal)
    {
        $this->animal = is_null($animal)?$this->animal:$animal;
    }
    public function setAdoptante($adoptante)
    {
        $this->adoptante = is_null($adoptante)?$this->adoptante:$adoptante;
    }
    public function setUser($user)
    {
        $this->user = is_null($user)?$this->user:$user;
    }
    public function setFechaAdopcion($fechaAdopcion)
    {
        $this->fechaAdopcion = is_null($fechaAdopcion)?$this->fechaAdopcion:$fechaAdopcion;
    }
    public function setCancelada($cancelada)
    {
        $this->cancelada = is_null($cancelada)?$this->cancelada:$cancelada;
    }
}

?>