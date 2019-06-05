<?php
include 'Conexion.php';

// Create connection
$con = new Conexion();
$conn = $con->Conectar();
$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

    $tabla = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($fila = $result->fetch_assoc()) {
            echo "<tr><th scope='row'><input type='checkbox'></th>
            <td>" . $fila["nombre"]. "</td>
            <td>" . $fila["edad"]. "</td>
            <td>" . $fila["raza"]. "</td>
            <td>" . $fila["sexo"]. "</td>
            <td>" . $fila["fechaIngreso"]. "</td>
            <td>" . $fila["chip"]. "</td>
            <td>" . $fila["observacion"]. "</td></tr>";
            $tabla[] = $fila;
        }
    } else {
        echo "0 results";
    }
    $con->Desconectar();
?>

