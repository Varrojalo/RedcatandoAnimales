<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Adopcion.php';
class AdopcionDao
{
    function BuscarAdopcionAnimal($animalID)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT DISTINCT * FROM adopcion WHERE ANIMAL_ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$animalID);
        $statement->execute();
        $result = $statement->get_result();
    
    
        //$lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $adopcion = new Adopcion(
                $fila["ID"],
                new Animal($fila["ANIMAL_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
                new Adoptante($fila["ADOPTANTE_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
                new User($fila["USER_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
                $fila["FECHA_ADOPCION"],
                $fila["CANCELADA"]
            );
            
            return $adopcion;
        } else {
            return null;
        }
        $con->Desconectar();
    }

}

?>