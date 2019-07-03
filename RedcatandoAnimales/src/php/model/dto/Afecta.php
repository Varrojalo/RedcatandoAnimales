<?php
class Afecta
{
    protected $id;
    protected $animal;
    protected $diagnostico;
    protected $fechaDiagnostico;

    public function __construct($id, $animal, $diagnostico, $fechaDiagnostico)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->animal = is_null($animal)?new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL):$animal;
        $this->diagnostico = is_null($diagnostico)?new Diagnostico(NULL,new Organizacion(NULL,NULL,NULL),NULL,NULL):$diagnostico;
        $this->fechaDiagnostico = is_null($fechaDiagnostico)?$this->fechaDiagnostico:$fechaDiagnostico;
    }
    

    public function getID()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id = $id;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
    
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getFechaDiagnostico()
    {
        return $this->fechaDiagnostico;
    }
    public function setFechaDiagnostico($fechaDiagnostico)
    {
        $this->fechaDiagnostico = $fechaDiagnostico;
    }
}

?>