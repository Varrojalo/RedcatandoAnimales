import {ObtenerAnimales} from 'AnimalesDao.js';

function LlenarTabla() {
     //recuperar animales relacionados a la asociacion
     var animales = ObtenerAnimales(sessionStorage.getItem("asociacion"));

     //Ingresar datos en la tabla
     animales.forEach(a => {
          Document.write("<td>"+
          a["NOMBRE"]+"<td/><td>"+
          a["EDAD"]+"<td/><td>"+
          a["RAZA"]+"<td/><td>"+
          a["SEXO"]+"<td/><td>"+
          a["EDAD"]+"<td/><td>"+
          a["CHIP"]+"<td/><td>"+
          a["OBSERVACION"]+"<td/>");
     });
}