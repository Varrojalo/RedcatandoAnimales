<?php
include_once '../model/Conexion.php';
include_once '../model/dto/User.php';
class UserDao
{
    function buscarUsuario($codigo){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM user WHERE RUT = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('s',$codigo);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();

            $usuario = new User($fila["ID"],
            $fila["RUT"],
            $fila["PASSWORD"],
            $fila["PRIMER_NOMBRE"],
            $fila["SEGUNDO_NOMBRE"],
            $fila["APELLIDO_PATERNO"],
            $fila["APELLIDO_MATERNO"],
            $fila["CARGO"],
            $fila["REMEMBER_TOKEN"]);
            
            return $usuario;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();

        return $socio;
    }
}
?>