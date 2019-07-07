<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Animal.php';
include_once '../model/dto/User.php';
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
        $sql = "SELECT * FROM animal WHERE ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$codigo);
        $statement->execute();
        $result = $statement->get_result();
    
        //$lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $animal = new Animal($fila["ID"], new Raza($fila["RAZA_ID"],NULL,NULL), new Organizacion($fila["ORGANIZACION_ID"],NULL,NULL), new User ($fila["USER_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),$fila["URL"] , $fila["CHIP"], $fila["NOMBRE"], $fila["PATRON"], $fila["FECHA_NACIMIENTO"], $fila["SEXO"], $fila["OBSERVACION"], $fila["ESTERILIZADO"], $fila["ESTADO"], $fila["CREATED_AT"], $fila["UPDATED_AT"]);
            
            return $animal;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();
    }
    function buscarAnimalesOrganizacion($codOrganizacion)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM animal WHERE ORGANIZACION_ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$codOrganizacion);
        $statement->execute();
        $result = $statement->get_result();
    
        $lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $lista[] = new Animal(
                    $fila["ID"], 
                    new Raza($fila["RAZA_ID"],NULL,NULL), 
                    new Organizacion($fila["ORGANIZACION_ID"],NULL,NULL), 
                    new User ($fila["USER_ID"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), 
                    $fila["URL"],
                    $fila["CHIP"], 
                    $fila["NOMBRE"], 
                    $fila["PATRON"], 
                    $fila["FECHA_NACIMIENTO"], 
                    $fila["SEXO"], 
                    $fila["OBSERVACION"], 
                    $fila["ESTERILIZADO"], 
                    $fila["ESTADO"], 
                    $fila["CREATED_AT"], 
                    $fila["UPDATED_AT"]
                );
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
        $sql = "DELETE FROM animal WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param("s",$animal->getCodigo());
        $statement->execute();
        $con->Desconectar();
    }
    function eliminarAnimalCod($codigo)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "DELETE FROM animal WHERE ID = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param("i",$codigo);
        $statement->execute();
        $statement->close();
        $con->Desconectar();
    }

    function agregarAnimal($animal)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "INSERT INTO animal (RAZA_ID, ORGANIZACION_ID, USER_ID, URL, CHIP, NOMBRE, PATRON, FECHA_NACIMIENTO, SEXO, OBSERVACION, CREATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
        $statement = $conn->prepare($sql);
        $conn->set_charset("utf8");

        $chip = $animal->getChip();
        $codOrg = $animal->getOrganizacion()->getID();
        $user = $animal->getUserID();
        echo $user;
        $nombre = $animal->getNombre();
        $url = $animal->getURL();
        $fechaNacimiento = $animal->getFechaNacimiento();
        $fechaIngreso = date("Y-m-d");
        $raza = $animal->getRaza();
        $patron = $animal->getPatron();
        $sexo = $animal->getSexo();
        $obs = $animal->getObservacion();

        $statement->bind_param('iiisissssss',$raza,$codOrg,$user,$url,$chip,$nombre,$patron,$fechaNacimiento,$sexo,$obs,$fechaIngreso);
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
    public function cambiarEstado($estado,$animalID)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "UPDATE animal SET ESTADO=? WHERE ID=?";
        $statement = $conn->prepare($sql);

        $statement->bind_param('si',$estado,$animalID);
        $statement->execute();
        $con->Desconectar();
    }
}
?>

