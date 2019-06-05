<<<<<<< HEAD
$(document).ready(LlenarTabla());

var table;

function LlenarTabla()
=======
//import { BuscarAnimales } from "../js/AnimalDao.js";
import BuscarAnimales from '../js/AnimalDao.js';

$(document).ready(function()
>>>>>>> 374ff8fa6f9e175a6e14e175cc314c016de107dc
{
     var ajax = new XMLHttpRequest();

     ajax.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
          }
     }

     ajax.open("GET", "../php/AnimalDao.php", true);

<<<<<<< HEAD
     ajax.send();
}
=======
     console.log("animales");
});
>>>>>>> 374ff8fa6f9e175a6e14e175cc314c016de107dc
