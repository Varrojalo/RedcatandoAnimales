var mysql = require('mysql');

//parametros de coneccion
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

function BuscarAnimal(organizacion) {
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //Query
        var sql = "SELECT * FROM organizacion WHERE ORGANIZACIONCOD = "+organizacion
        con.query(sql, function (err, result) {
          if (err) throw err;
          console.log(result);
        });
      });
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