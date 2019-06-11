<?php
include 'Conexion.php';
include 'model/dto/Direccion.php';

class DireccionDao
{
    function buscarDireccion(){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = $conn->prepare("SELECT * FROM direccion");
        $result = $conn->query($sql);
    
        $tabla = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $tabla[] = new Direccion($fila["cod"], $fila["codDuenio"], $fila["numero"],
                $fila["calle"], $fila["descripcion"]);
            }
            return $tabla;
        } else {
            echo "0 results";
            return null;
        }
        $con->Desconectar();
    }
    
    function agregarDireccion($direccion)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = $conn->prepare("INSERT INTO direccion (cod, codDuenio, numero, calle, descripcion) VALUES (?,?,?,?,?)");
        $sql = $conn->bind_param($direccion->getCodigo(), $direccion->getDuenio(), $direccion->getNumero(), $direccion->getCalle(), $direccion->getDescripcion(), $direccion->getTipo());
        $result = $conn->query($sql);
    }
    
    function eliminarDireccion($codigo)
    {
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "DELETE * FROM direccion WHERE cod = ?";
        $statement =$conn->prepare($sql);
        $statement->bind_param($codigo);
        $statement->execute();
        $con->Desconectar();
    }
}
?>