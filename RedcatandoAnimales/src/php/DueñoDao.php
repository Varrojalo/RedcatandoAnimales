<?php
include 'Conexion.php';
include 'model/dto/Dueño.php';

function buscarDueños(){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("SELECT * FROM dueno");
    $result = $conn->query($sql);

    $tabla = array();

    if ($result->num_rows > 0) {
        // almacena resultado en arreglo
        while($fila = $result->fetch_assoc()) {
            $tabla[] = new Dueño($fila["cod"], $fila["codOrganizacion"], $fila["apellidoPaterno"],
            $fila["apellidoMaterno"], $fila["fechaAdopcion"], $fila["puntajeAdoptante"]);
        }
        return $tabla;
    } else {
        echo "0 results";
        return null;
    }
    $con->Desconectar();
}

function agregarCampaña($dueño)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("INSERT INTO dueno (cod, codOrganizacion, apellidoPaterno, apellidoMaterno, fechaAdopcion, puntajeAdoptante)
    VALUES (?,?,?,?,?,?)");
    $sql = $conn->bind_param($dueño->getCodigo(), $dueño->getCodigoOrganizacion(), $dueño->getApellidoPaterno(), $dueño->getApellidoMaterno(), $dueño->getFechaAdopcion(), $dueño->getPuntuacionAdoptante());
    $result = $conn->query($sql);
}

function eliminarCampaña($codigo)
{
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = $conn->prepare("DELETE * FROM dueno WHERE cod = ?");
    $sql->bind_param($codigo)
    $result = $conn->query($sql);

    $con->Desconectar();
}
?>