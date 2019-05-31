const mysql = require('mysql');

//parametros de coneccion
const con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

exports.BuscarAnimales = function BuscarAnimales(organizacion) {
  let animales;

  //coneccion a bd
  con.connect(function(err) {
    if (err){
      throw err;
    } 
    console.log("Connected!");

    //Query
    //let sql = "SELECT * FROM animal WHERE codOrganizacion = '"+organizacion+"'";
    let sql = "SELECT * FROM animal";
    let query = con.query(sql, (err, result) => {
      if (err) 
      {
        throw err;
      }
      animales = result[0].nombre;
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
