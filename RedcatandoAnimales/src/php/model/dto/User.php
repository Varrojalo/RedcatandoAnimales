<?php
class User
{
    private $id;
    private $rut;
    private $pass;
    private $primerNombre;
    private $segundoNombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $cargo;
    private $remember_token;
    
    function __construct($id, $rut, $pass, $primerNombre, $segundoNombre, $apellidoPaterno, $apellidoMaterno, $cargo,$remember_token)
    {
        $this->id = is_null($id)?$this->id:$id;
        $this->pass = is_null($pass)?$this->pass:$pass;
        $this->primerNombre = is_null($primerNombre)?$this->primerNombre:$primerNombre;
        $this->segundoNombre = is_null($segundoNombre)?$this->segundoNombre:$segundoNombre;
        $this->apellidoPaterno = is_null($apellidoPaterno)?$this->apellidoPaterno:$apellidoPaterno;
        $this->apellidoMaterno = is_null($apellidoMaterno)?$this->apellidoMaterno:$apellidoMaterno;
        $this->cargo = is_null($cargo)?$this->cargo:$cargo;
        $this->$remember_token = is_null($remember_token)?$this->remember_token:$remember_token;
    }

    public function getID(){
        return $this->id;
    }

    public function getPass(){
        return $this->pass;
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
    public function getCargo(){
        return $this->cargo;
    }

    public function setid($id){
        $this->id = $id;
    }

    public function setPass($pass){
        $this->pass = $pass;
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

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
}

?>