<?php
include 'Conexion.php';
include 'model/dto/Animal.php';

function buscarAnimales(){
    // Crea conexion
    $con = new Conexion();
    $conn = $con->Conectar();
    $sql = "SELECT * FROM animal";
    $result = $conn->query($sql);

    $tabla = array();

    if ($result->num_rows > 0) {
        // almacena resultado en arreglo
        while($fila = $result->fetch_assoc()) {
            $tabla[] = new Animal($fila["cod"], $fila["codOrganizacion"], $fila["codDueno"],
            $fila["nombre"], $fila["edad"], $fila["fechaIngreso"], $fila["especie"], $fila["raza"], 
            $fila["patron"], $fila["sexo"], $fila["observacion"], $fila["chip"]);
        }
        return $tabla;
    } else {
        echo "0 results";
        return null;
    }
    $con->Desconectar();
}


?>

