var mysql = require('mysql');

//parametros de coneccion
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

function ObtenerSocio(rut) {
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //Query
        var sql = "SELECT * FROM socio WHERE COD = '"+rut+"'";
        con.query(sql, function (err, result) {
            if (err) throw err;
        });
    });

    return result;
}
