<?php
include_once '../model/dto/Especie.php';
class EspecieDao
{
    function BuscarEspecieRazaID($razaID)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT e.ID as ID, e.NOMBRE as NOMBRE FROM raza as r,especie as e WHERE r.ESPECIE_ID=e.ID AND r.ID=?;";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$razaID);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $especie = new Especie(
                $fila["ID"],
                $fila["NOMBRE"]
            );
            
            return $especie;
        } else {
            return null;
        }
        $con->Desconectar();
    }

}

?>