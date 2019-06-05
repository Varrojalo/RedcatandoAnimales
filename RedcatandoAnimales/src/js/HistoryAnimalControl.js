//import { BuscarAnimales } from "../js/AnimalDao.js";
import BuscarAnimales from '../js/AnimalDao.js';

$(document).ready(function()
{
     var ajax = new XMLHttpRequest();

     ajax.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
          }
     }

     ajax.open("GET", "../php/AnimalDao.php", true);

     console.log("animales");
});
