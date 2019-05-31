//import { BuscarAnimales } from "../js/AnimalDao.js";
var aDao = require('BuscarAnimales');

// function LlenarTabla() {
//      //recuperar animales relacionados a la asociacion
//      var animales = BuscarAnimales(sessionStorage.getItem("asociacion"));

//      //Ingresar datos en la tabla
//      animales.forEach(a => {
//           Document.write("<td>"+
//           a["NOMBRE"]+"<td/><td>"+
//           a["EDAD"]+"<td/><td>"+
//           a["RAZA"]+"<td/><td>"+
//           a["SEXO"]+"<td/><td>"+
//           a["EDAD"]+"<td/><td>"+
//           a["CHIP"]+"<td/><td>"+
//           a["OBSERVACION"]+"<td/>");
//      });
// }

$(document).ready(LlenarTabla());

function LlenarTabla()
{
     var filas = $('.filasBody');

     var animales = BuscarAnimales(sessionStorage.getItem("asociacion"));

     animales.forEach(a =>
          {
               filas.append("<tr>"+
               "<th scope='row'><input type='checkbox></th>"+
               "<td>"+a["NOMBRE"]+"</td>"+
               "<td>"+a["EDAD"]+"</td>"+
               "<td>"+a["RAZA"]+"</td>"+
               "<td>"+a["SEXO"]+"</td>"+
               "<td>"+a["EDAD"]+"</td>"+
               "<td>"+a["CHIP"]+"</td>"+
               "<td>"+a["OBSERVACION"]+"</td>"+
               "</tr>");
          });

     console.log("animales");
}