<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Adopcion.php';
include_once '../model/dao/AnimalDao.php';
class AdopcionDao
{
    function buscarAdopcionAnimal($animalID)
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
                new Animal($fila["ANIMAL_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
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
    public function adoptarAnimal($animalID,$adoptanteID,$userID)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $aDao = new AnimalDao();
        $aDao->cambiarEstado("adoptado",$animalID);
        $sql = "INSERT INTO adopcion (ANIMAL_ID, ADOPTANTE_ID, USER_ID, FECHA_ADOPCION) VALUES (?,?,?,?);";
        $statement = $conn->prepare($sql);
        $fechaActual = date('Y-m-d');
        $statement->bind_param('iiis',$animalID,$adoptanteID,$userID,$fechaActual);
        $statement->execute();        
        $con->Desconectar();
    }
}

?>