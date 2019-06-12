<?php
include 'Conexion.php';
include 'model/dto/Organizacion.php';

function buscarOrganizacion(){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = "SELECT * FROM organizacion";
    $result = $conn->query($sql);
    $tabla = array();

    if ($result->num_rows > 0) {
        // almacena resultado en arreglo
        while($fila = $result->fetch_assoc()) {
            $tabla[] = new Oganizacion($fila["cod"], $fila["nombre"]);
        }
        return $tabla;
    } else {
        echo "0 results";
        return null;
    }
    $con->Desconectar();
}

function eliminarOrganizacion($codigo)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = "DELETE * FROM organizacion WHERE cod = ".$codigo;
    $result = $conn->query($sql);
    $con->Desconectar();
}

function actualizarOrganizacion($organizacion)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = "DELETE * FROM organizacion WHERE cod = ".$codigo;
    $sql = "UPDATE organizacion SET nombre= '.$organizacion->nombre' WHERE cod ='.$organizacion->cod'";
    $result = $conn->query($sql);
    $con->Desconectar();
}

function agregarOrganizacion($organizacion)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $stmt = $conn->prepare("INSERT INTO organizacion (cod, nombre) VALUES (?, ?)");
    $stmt->bind_param("ss", $organizacion->cod, $organizacion->nombre);
    $stmt->bind_param($organizacion->cod, $organizacion->nombre);
    $stmt->close();
    $con->Desconectar();

    
}


?>

