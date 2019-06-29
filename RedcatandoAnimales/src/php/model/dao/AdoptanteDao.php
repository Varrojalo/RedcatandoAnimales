<?php
include_once '../model/Conexion.php';
include_once '../model/dto/User.php';
include_once '../model/dto/Comuna.php';
class AdoptanteDao
{

    function buscarAdoptanteId($id)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM adoptante WHERE ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$id);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $adoptante = new Adoptante(
                $fila["ID"], 
                new Comuna($fila["COMUNA_ID"],NULL,NULL),
                new User($fila["USER_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
                $fila["RUT"],
                $fila["PRIMER_NOMBRE"],
                $fila["SEGUNDO_NOMBRE"],
                $fila["APELLIDO_PATERNO"],
                $fila["APELLIDO_MATERNO"],
                $fila["PUNTUACION"],
                $fila["DIRECCION"]
            );
            
            return $adoptante;
        } else {
            return null;
        }
        $con->Desconectar();
    }
   
}
?>