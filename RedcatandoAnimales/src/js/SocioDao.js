var mysql = require('mysql');

//parametros de coneccion
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

function ObtenerSocio(rut) {
    var socio;
    
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //Query
        var sql = "SELECT * FROM socio WHERE COD = '"+rut+"'";
        con.query(sql, function (err, result) {
            if (err) throw err;
            console.log(result);
        });
    });
    return socio;
}

var algo = ObtenerSocio("19463187-1");
console.log(algo);