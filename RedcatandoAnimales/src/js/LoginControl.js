import {ObtenerSocio} from 'SocioDao.js';
import {ValidarRut} from 'Validadores.js';

//Recuperar elementos de index.html
var rut = Document.getElementByName("rut");
var contraseña = Document.getElementByName("contraseña");
var rol = Document.getElementByName("rol");
var asociacion = Document.getElementByName("asociacion");

function ValidarCredenciales(){
    //validacion de credenciales
    if(ValidarRut(rut)){
        var socio = ObtenerSocio(rut);
        if(socio[CONTRASENA] == contraseña){
            // Almacena la información en sessionStorage
            sessionStorage.setItem("nombre", socio["NOMBRE"]);
            sessionStorage.setItem("rol", socio["ROL"]);
            sessionStorage.setItem("asocioacion", socio["ASOCIACION"]);
            //Redirigir a Historal Animal
            location.replace("/RedcatandoAnimales/src/html/history-animal.html");
        }else{
            location.replace("/RedcatandoAnimales/src/html/erro.html"); 
        }
    }
}