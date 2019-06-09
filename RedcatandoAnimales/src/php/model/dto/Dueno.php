<?php
class Dueno
{
    private $cod;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaAdopcion;
    private $puntuacionAdoptante;

    public function __construct($cod, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaAdopcion, $puntuacionAdoptante)
    {
        $this->cod = is_null($cod)?$this->cod:$cod;
        $this->nombre = is_null($nombre)?$this->nombre:$nombre;
        $this->apellidoPaterno = is_null($apellidoPaterno)?$this->apellidoPaterno:$apellidoPaterno;
        $this->apellidoMaterno = is_null($apellidoMaterno)?$this->apellidoMaterno:$apellidoMaterno;
        $this->fechaAdopcion = is_null($fechaAdopcion)?$this->fechaAdopcion:$fechaAdopcion;
        $this->puntuacionAdoptante = is_null($puntuacionAdoptante)?$this->puntuacionAdoptante:$puntuacionAdoptante;
    }

    public function getCod(){
        return $this->cod;
    }
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellidoPaterno(){
        return $this->apellidoPaterno;
    }
    public function getApellidoMaterno(){
        return $this->apellidoMaterno;
    }
    public function getFechaAdopcion(){
        return $this->fechaAdopcion;
    }
    public function getPuntuacionAdoptante(){
        return $this->puntuacionAdoptante;
    }
    
    

    public function setCod($codigo){
        $this->cod = $codigo;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setApellidoPaterno($apellidoPaterno){
        $this->apellidoPaterno = $apellidoPaterno;
    }
    public function setApellidoMaterno($apellidoMaterno){
        $this->apellidoMaterno = $apellidoMaterno;
    }
    public function setFechaAdopcion($fechaAdopcion){
        $this->fechaAdopcion = $fechaAdopcion;
    }
    
    public function setPuntuacionAdoptante($puntuacionAdoptante){
        $this->puntuacionAdoptante = $puntuacionAdoptante;
    }
    
}
?>