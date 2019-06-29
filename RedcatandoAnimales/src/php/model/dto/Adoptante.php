<?php
include_once "Comuna.php";
include_once "User.php";
class Adoptante
{
    private $id;
    private $comuna;
    private $user;
    private $rut;
    private $primerNombre;
    private $segundoNombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $puntuacion;
    private $direccion;


    public function __construct($id, $comuna, $user, $rut, $primerNombre, $segundoNombre, $apellidoPaterno, $apellidoMaterno, $puntuacion, $direccion) {
        $this->id = is_null($id)?$this->id:$id;
        $this->comuna = is_null($comuna)?new Comuna(NULL,NULL,NULL):$comuna;
        $this->user = is_null($user)?new User(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL):$user;
        $this->primerNombre = is_null($primerNombre)?$this->primerNombre:$primerNombre;
        $this->segundoNombre = is_null($segundoNombre)?$this->segundoNombre:$segundoNombre;
        $this->apellidoPaterno = is_null($apellidoPaterno)?$this->apellidoPaterno:$apellidoPaterno;
        $this->apellidoMaterno = is_null($apellidoMaterno)?$this->apellidoMaterno:$apellidoMaterno;
        $this->puntuacion = is_null($puntuacion)?$this->puntuacion:$puntuacion;
        $this->direccion = is_null($direccion)?$this->direccion:$direccion;
    }

    public function getID(){
        return $this->id;
    }
    public function getComuna(){
        return $this->comuna;
    }
    public function getUser(){
        return $this->user;
    }
    public function getRut(){
        return $this->rut;
    }
    public function getPrimerNombre(){
        return $this->primerNombre;
    }
    public function getSegundoNombre(){
        return $this->segundoNombre;
    }
    public function getApellidoPaterno(){
        return $this->apellidoPaterno;
    }
    public function getApellidoMaterno(){
        return $this->apellidoMaterno;
    }
    public function getNombreCompleto()
    {
        return $this->primerNombre." ".$this->segundoNombre." ".$this->apellidoPaterno." ".$this->apellidoMaterno;
    }
    public function getPuntuacion(){
        return $this->puntuacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function setID($id){
        $this->id = $id;
    }
    public function setComuna($comuna){
        $this->comuna = $comuna;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function setRut($rut){
        $this->rut = $rut;
    }
    public function setPrimerNombre($primerNombre){
        $this->primerNombre = $primerNombre;
    }
    public function setSegundoNombre($segundoNombre){
        $this->segundoNombre = $segundoNombre;
    }
    public function setApellidoPaterno($apellidoPaterno){
        $this->apellidoPaterno = $apellidoPaterno;
    }
    public function setApellidoMaterno($apellidoMaterno){
        $this->apellidoMaterno = $apellidoMaterno;
    }
    public function setPuntuacion($puntuacion){
        $this->puntuacion = $puntuacion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
}
?>