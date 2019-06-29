<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Especie.php';
include_once '../model/dto/Raza.php';
class RazaDao
{

    function buscarRazaId($id)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM raza WHERE ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$id);
        $statement->execute();
        $result = $statement->get_result();
    
        //$lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $raza = new Raza($fila["ID"], new Especie($fila["ESPECIE_ID"],NULL),$fila["NOMBRE"]);
            
            return $raza;
        } else {
            return null;
        }
        $con->Desconectar();
    }
   
}
?>