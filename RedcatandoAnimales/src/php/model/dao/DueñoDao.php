<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Dueño.php';

class DueñoDao
{
    function buscarDueño($codigo)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM dueno WHERE cod = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('s',$codigo);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $dueño = new Dueño($fila["cod"], $fila["nombre"], $fila["apellidoPaterno"],
            $fila["apellidoMaterno"], $fila["fechaAdopcion"], $fila["puntuacionAdoptante"]);
            
            return $dueño;
        } else {
            return null;
        }
        $con->Desconectar();
    }
    function buscarDueños(){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM dueno";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->get_result();
    
        $tabla = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $tabla[] = new Dueño($fila["cod"], $fila["nombre"], $fila["apellidoPaterno"],
                $fila["apellidoMaterno"], $fila["fechaAdopcion"], $fila["puntajeAdoptante"]);
            }
            return $tabla;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();
    }
    
    function agregarDueño($dueño)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = $conn->prepare("INSERT INTO dueno (cod, nombre, apellidoPaterno, apellidoMaterno, fechaAdopcion, puntajeAdoptante)
        VALUES (?,?,?,?,?,?)");
        $sql = $conn->bind_param($dueño->getCodigo(), $dueño->getNombre(), $dueño->getApellidoPaterno(), $dueño->getApellidoMaterno(), $dueño->getFechaAdopcion(), $dueño->getPuntuacionAdoptante());
        $result = $conn->query($sql);
    }
    
    function eliminarDueño($codigo)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = $conn->prepare("DELETE * FROM dueno WHERE cod = ?");
        $sql->bind_param($codigo);
        $result = $conn->query($sql);
    
        $con->Desconectar();
    }
}

?>