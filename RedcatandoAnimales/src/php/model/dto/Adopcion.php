<?php
include_once "Animal.php";
include_once "Adoptante.php";

class Adopcion
{
    private $animal;
    private $adoptante;
    private $fechaAdopcion;

    public function __construct($animal,$adoptante,$fechaAdopcion) {
        $this->animal = is_null($animal)?new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$animal;
        $this->adoptante = is_null($adoptante)?new Adoptante(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$adoptante;
        $this->fechaAdopcion = is_null($fechaAdopcion)?$this->fechaAdopcion:$fechaAdopcion;
    }

    public function getAnimal()
    {
        return $this->animal;
    }
    
    public function getAdoptante()
    {
        return $this->adoptante;
    }

    public function getFechaAdopcion()
    {
        return $this->fechaAdopcion;
    }

    public function setAnimal($animal)
    {
        $this->animal = is_null($animal)?$this->animal:$animal;
    }
    
    public function setAdoptante($adoptante)
    {
        $this->adoptante = is_null($adoptante)?$this->adoptante:$adoptante;
    }

    public function setFechaAdopcion($fechaAdopcion)
    {
        $this->fechaAdopcion = is_null($fechaAdopcion)?$this->fechaAdopcion:$fechaAdopcion;
    }
}

?>