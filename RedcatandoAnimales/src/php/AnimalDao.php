<?php
include 'Conexion.php';
include 'model/dto/Animal.php';

class AnimalDao
{
    function buscarAnimales(){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM animal";
        $result = $conn->query($sql);
    
        $lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $lista[] = new Animal($fila["cod"], $fila["codOrganizacion"], $fila["codDueno"],
                $fila["nombre"], $fila["edad"], $fila["fechaIngreso"], $fila["especie"], $fila["raza"], 
                $fila["patron"], $fila["sexo"], $fila["observacion"], $fila["chip"]);
            }
            return $lista;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();
    }
    function eliminarAnimal($animal)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "DELETE * FROM animal WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param($animal->getCodigo());
        $statement->execute();
        $con->Desconectar();
    }
    function agregarAnimal($animal)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "INSERT INTO animal (cod, codDueno, codOrganizacion, nombre, edad, fechaIngreso, especie, raza, patron, sexo, observacion, chip) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->bind_param($animal->getCodigo(),$animal->getCodigoDueño(),$animal->getCodigoOrganizacion(),$animal->getNombre(),$animal->getEdad(),$animal->getFechaIngreso(),$animal->getEspecie(),$animal->getRaza(),$animal->getPatron(),$animal->getSexo(),$animal->getObservacion(),$animal->getChip());
        $statement->execute();
        $con->Desconectar();
    }
}
?>

