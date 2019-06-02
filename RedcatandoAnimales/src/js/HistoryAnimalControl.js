//import { BuscarAnimales } from "../js/AnimalDao.js";
import BuscarAnimales from '../js/AnimalDao.js';

$(document).ready(function()
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
});