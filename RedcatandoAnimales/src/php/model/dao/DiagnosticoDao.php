<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Animal.php';

class DiagnosticoDao
{
    function buscarDiagnosticosAnimal($animal)
    {
         // Crea conexion
         $con = new Conexion();
         $conn = $con->Conectar();
         $sql = "SELECT * FROM diagnostico WHERE codAnimal = ?";
         $statement = $conn->prepare($sql);
         $statement->bind_param('s',$animal->getCodigo());
         $statement->execute();
         $result = $statement->get_result();
     
         $lista = array();
     
         if ($result->num_rows > 0) {
             // almacena resultado en arreglo
             while($fila = $result->fetch_assoc()) {
                $aDao = new AnimalDao(); 
                $animal = $aDao->buscarAnimal($fila["codAnimal"]);
                $lista[] = new Diagnostico($fila["cod"], $animal,$fila["descripcion"],$fila["tratamiento"],$fila["fecha"] );
             }
             return $lista;
         } else {
             echo "0 results";
             return null;
         }
         $con->Desconectar();
    }
}

?>