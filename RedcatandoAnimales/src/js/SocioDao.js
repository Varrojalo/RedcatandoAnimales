var mysql = require('mysql');

//parametros de coneccion
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "redcate"
});

function VerificarSocio(rut, contraseña, asociacion, rol) {
    
    //coneccion a bd
    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");

        //Query
        var sql = "SELECT COUNT(COD) FROM socio WHERE COD = '"+rut+"'";
        con.query(sql, function (err, result) {
            if (err) throw err;
            console.log(result);
        });
    });
    return result;
}
