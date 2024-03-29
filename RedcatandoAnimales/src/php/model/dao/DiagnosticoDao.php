<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Animal.php';
include_once '../model/dto/Diagnostico.php';
include_once '../model/dao/AnimalDao.php';
include_once '../model/dao/OrganizacionDao.php';
class DiagnosticoDao
{
    function buscarDiagnosticosAnimal($animalID)
    {
         // Crea conexion
         $con = new Conexion();
         $conn = $con->Conectar();
         $sql = "SELECT d.ID as DIAGNOSTICO_ID,d.ORGANIZACION_ID,d.NOMBRE,d.DESCRIPCION ,a.ID as AFECTA_ID,a.ANIMAL_ID,a.FECHA_DIAGNOSTICO FROM afecta as a , diagnostico as d WHERE a.DIAGNOSTICO_ID = d.ID and a.ANIMAL_ID=?;";
         $conn->set_charset("utf8");
         $statement = $conn->prepare($sql);
         $statement->bind_param('i',$animalID);
         $statement->execute();
         $result = $statement->get_result();
     
         $lista = array();
     
         if ($result->num_rows > 0) {
             // almacena resultado en arreglo
             while($fila = $result->fetch_assoc()) {
                $oDao = new OrganizacionDao();
                $organizacion = $oDao->buscarOrganizacionID($fila["ORGANIZACION_ID"]);
                $lista[] = new Diagnostico($fila["DIAGNOSTICO_ID"],$organizacion,$fila["NOMBRE"],$fila["DESCRIPCION"]);
             }
             return $lista;
         } else {
             return null;
         }
         $con->Desconectar();
    }

    

}

?>