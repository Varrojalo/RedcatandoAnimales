$(document).ready(LlenarTabla());

var table;

function LlenarTabla()
{
     var ajax = new XMLHttpRequest();

     ajax.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
          }
     }

     ajax.open("GET", "../php/AnimalDao.php", true);

     ajax.send();
}