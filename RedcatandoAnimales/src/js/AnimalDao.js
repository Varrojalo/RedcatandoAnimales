var mysql = require('mysql');

//parametros de coneccion
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

function BuscarAnimales(organizacion) {
    var animales = new Array();
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //Query
        var sql = "SELECT * FROM animal WHERE CODORGANIZACION = "+organizacion
        con.query(sql, function (err, result) {
          if (err) throw err;
          result.forEach(r => {
            animales.push(r)
          });
          console.log(result);
        });
      });
    return animales;
}

function IngresarAnimal(animal){
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //query
        var sql = 'INSERT INTO animal ('+animal.codigo+', NULL, 123456789, '+animal.nombre+','+animal.raza+', '+animal.chip+', NULL)'
        con.query(sql, function (err, result) {
          if (err) throw err;
          console.log(result);
        });
      });
}