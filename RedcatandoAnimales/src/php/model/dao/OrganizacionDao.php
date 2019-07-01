<?php
include_once '../model/Conexion.php';
include_once '../model/dto/Organizacion.php';

class OrganizacionDao
{
    function buscarOrganizacionUsuario($user)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM organizacion_user WHERE USER_ID = ?";
        $statement = $conn->prepare($sql);
        $statement->bind_param('i', $user);
        $statement->execute();
        $result = $statement->get_result();
        $tabla = array();
    
        if ($result->num_rows > 0) {
            $fila = $result->fetch_assoc();

            $IdOrganizacion = $fila["ORGANIZACION_ID"];
            return $IdOrganizacion;
        } else {
            return null;
        }
        $con->Desconectar();
    }

    function buscarOrganizacion(){
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM organizacion";
        $statement = $conn->prepare($sql);
        $statement->bind_param('i', $user);
        $statement->execute();
        $result = $statement->get_result();
        $tabla = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            while($fila = $result->fetch_assoc()) {
                $tabla[] = new Organizacion($fila["ID"], $fila["RUT"], $fila["RAZON_SOCIAL"]);
            }
            return $tabla;
        } else {
            return null;
        }
        $con->Desconectar();
    }
    function buscarOrganizacionID($id)
    {
        // Crea conexion
        $con = new Conexion();
        $conn = $con->Conectar();
        $sql = "SELECT * FROM organizacion WHERE ID = ?";
        $conn->set_charset("utf8");
        $statement = $conn->prepare($sql);
        $statement->bind_param('i',$id);
        $statement->execute();
        $result = $statement->get_result();
    
        //$lista = array();
    
        if ($result->num_rows > 0) {
            // almacena resultado en arreglo
            $fila = $result->fetch_assoc();
            $animal = new Organizacion($fila["ID"], $fila["RUT"], $fila["RAZON_SOCIAL"]);
            return $animal;
        } else {
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
}
?>

