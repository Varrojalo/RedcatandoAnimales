<?php
include_once '../model/Conexion.php';
include '../model/dto/Socio.php';
include_once '../model/dto/Organizacion.php';

class SocioDao
{
    function buscarSocio($codigo){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM socio WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('s',$codigo);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();

            $socio = new Socio($fila["cod"], new Organizacion($fila["codOrganizacion"], NULL),
             $fila["contrasena"], $fila["nombre"], 
             $fila["apellidoPaterno"], $fila["cargo"]);
            
            return $socio;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();

        return $socio;
    
        $con->Desconectar();
    }
}
?>