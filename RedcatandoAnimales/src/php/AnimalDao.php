<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redcate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

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
$conn->close();
?>
