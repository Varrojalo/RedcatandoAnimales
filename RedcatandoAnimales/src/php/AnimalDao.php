<?php
include 'Conexion.php';

// Create connection
$con = new Conexion();
$conn = $con->Conectar();
$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($fila = $result->fetch_assoc()) {
        echo "cod: " . $fila["COD"]. " - Nombre: " . $fila["NOMBRE"]. " - Edad: " . $fila["EDAD"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->Desconectar();
?>

