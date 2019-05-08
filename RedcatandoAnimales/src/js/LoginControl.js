import {VerificarSocio} from 'SocioDao.js';

//Recuperar elementos de index.html
//Agrega nombres a las etiquetas
var rut = Document.getElementByName("");
var contraseña = Document.getElementByName("");
var rol = Document.getElementByName("");
var asociacion = Document.getElementByName("");

function ValidarCredenciales(){
    //validacion de credenciales
    if(VerificarSocio(rut, contraseña, asociacion, rol)){
        // Almacena la información en sessionStorage
        sessionStorage.setItem(rut, contraseña, asociacion, rol);
        //Redirigir a Historal Animal
        location.replace("/RedcatandoAnimales/src/html/history-animal.html");
    }
    

}