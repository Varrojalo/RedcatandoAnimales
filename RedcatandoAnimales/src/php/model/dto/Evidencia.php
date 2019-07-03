<?php
include_once "Afecta.php";
include_once "Diagnostico.php";
include_once "Animal.php";
include_once "Organizacion.php";
class Evidencia
{
    private $id;
    private $afecta;
    private $url;
    private $descripcion;

    public function __construct($id, $afecta, $url, $descripcion)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->afecta = is_null($afecta)?new Afecta(NULL,new Animal(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),new Diagnostico(NULL,new Organizacion(NULL,NULL,NULL),NULL,NULL),NULL):$afecta;
        $this->url = is_null($url)?$this->url:$url;
        $this->descripcion = is_null($descripcion)?$this->descripcion:$descripcion;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAfecta()
    {
        return $this->afecta;
    }

    public function setAfecta($afecta)
    {
        $this->afecta = $afecta;
    }

    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
?>