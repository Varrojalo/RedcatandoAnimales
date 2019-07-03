<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Evidencia.php';
include_once '../model/dto/Animal.php';
include_once '../model/dto/Diagnostico.php';
include_once '../model/dto/Afecta.php';
class EvidenciaDao
{
    public function buscarEvidenciasAnimal($animalID)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT e.ID as EVIDENCIA_ID,e.AFECTA_ID,e.URL as EVIDENCIA_URL,e.DESCRIPCION as EVIDENCIA_DESCRIPCION, a.ANIMAL_ID, a.DIAGNOSTICO_ID, a.FECHA_DIAGNOSTICO FROM afecta AS a, evidencia AS e WHERE e.AFECTA_ID=a.ID AND a.ANIMAL_ID=?;";
        $statement = $conn->prepare($sql);
        $statement->bind_param('i', $animalID);
        $statement->execute();
        $result = $statement->get_result();
        $tabla = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $tabla[] = new Evidencia(
                    $fila["EVIDENCIA_ID"],
                    new Afecta(
                        $fila["AFECTA_ID"],
                        new Animal($fila["ANIMAL_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
                        new Diagnostico($fila["DIAGNOSTICO_ID"],new Organizacion(NULL,NULL,NULL),NULL,NULL),
                        $fila["FECHA_DIAGNOSTICO"]
                    ),
                    $fila["EVIDENCIA_URL"],
                    $fila["EVIDENCIA_DESCRIPCION"]);
            }
            return $tabla;
        } else {
            return null;
        }
        $con->Desconectar();
    }
}
?>