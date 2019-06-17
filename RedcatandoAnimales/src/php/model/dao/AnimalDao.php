<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Animal.php';
include_once '../model/dto/Dueño.php';
include_once '../model/dto/Organizacion.php';
include_once '../model/dao/DueñoDao.php';
include_once '../model/dao/OrganizacionDao.php';
class AnimalDao
{
    function buscarAnimales(){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM animal";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->get_result();
    
        $lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $lista[] = new Animal($fila["cod"], new Organizacion($fila["codOrganizacion"],NULL), new Dueño($fila["codDueno"],NULL,NULL,NULL,NULL,NULL),
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
    function buscarAnimal($codigo)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM animal WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('s',$codigo);
        $statement->execute();
        $result = $statement->get_result();
    
        //$lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $animal = new Animal($fila["cod"], new Organizacion($fila["codOrganizacion"],NULL), new Dueño($fila["codDueno"],NULL,NULL,NULL,NULL,NULL),
                $fila["nombre"], $fila["edad"], $fila["fechaIngreso"], $fila["especie"], $fila["raza"], 
                $fila["patron"], $fila["sexo"], $fila["observacion"], $fila["chip"]);
            
            return $animal;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();
    }
    function buscarAnimalesOrganizacion($organizacion)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM animal WHERE codOrganizacion = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('s',$organizacion->getCodigo());
        $statement->execute();
        $result = $statement->get_result();
    
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
        $statement->bind_param("s",$animal->getCodigo());
        $statement->execute();
        $con->Desconectar();
    }
    function eliminarAnimalCod($codigo)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "DELETE * FROM animal WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param("s",$codigo);
        $statement->execute();
        $con->Desconectar();
    }
    function agregarAnimal($animal)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "INSERT INTO animal (cod, codDueno, codOrganizacion, nombre, edad, fechaIngreso, especie, raza, patron, sexo, observacion, chip) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);

        $dDao = new DueñoDao();
        $dueño = $dDao->buscarDueño($animal->getCodigoDueño());

        $cod = $animal->getCodigo();
        $codDueño = $animal->getCodigoDueño();
        $codOrg = $animal->getCodigoOrganizacion();
        $nombre = $animal->getNombre();
        $edad = $animal->getEdad();
        $fechaIngreso = $animal->getFechaIngreso();
        $especie = $animal->getEspecie();
        $raza = $animal->getRaza();
        $patron = $animal->getPatron();
        $sexo = $animal->getSexo();
        $obs = $animal->getObservacion();
        $chip =$animal->getChip();

        $statement->bind_param('ssssissssssi',$cod,$codDueño,$codOrg,$nombre,$edad,$fechaIngreso,$especie,$raza,$patron,$sexo,$obs,$chip);
        $statement->execute();
        $con->Desconectar();
    }

    public function actualizarAnimal($animal)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "UPDATE animal SET nombre=?, edad=?, fechaIngreso=?, patron=?, sexo=?, observacion=?, chip=? WHERE cod=?";
        $statement = $conn->prepare($sql);

        $cod = $animal->getCodigo();
        $nombre = $animal->getNombre();
        $edad = $animal->getEdad();
        $fechaIngreso = $animal->getFechaIngreso();
        $patron = $animal->getPatron();
        $sexo = $animal->getSexo();
        $obs = $animal->getObservacion();
        $chip =$animal->getChip();

        $statement->bind_param('sissssis',$nombre,$edad,$fechaIngreso,$patron,$sexo,$obs,$chip,$cod);
        $statement->execute();
        $con->Desconectar();
    }
    public function adoptarAnimal($codAnimal,$codDueño)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "UPDATE animal SET codDueno=? WHERE cod=?";
        $statement = $conn->prepare($sql);

        $statement->bind_param('ss',$codDueño,$codAnimal);
        $statement->execute();
        $con->Desconectar();
    }
}
?>

