<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procesando...</title>
</head>
<body>
<?php
include_once '../model/dao/UserDao.php';
include_once '../model/dto/User.php';
include_once '../model/dao/OrganizacionDao.php';

$rut = $_GET["rut"];
$pass = $_GET["pa"];

$uDao = new UserDao();

$usuario = $uDao->buscarUsuario($rut);
try {
    if ($usuario->getPass() == $pass) { //IMPORTANTE AGREGAR ENCRIPCION
        session_start();
        $_SESSION["usuario"] = $usuario;
        $oDao = new OrganizacionDao();
        $org = $oDao->buscarOrganizacionUsuario($usuario->getID());
        $_SESSION["org"] = $org;
    
        header("Location: ../view/history-animal.php?codOrg=".$org);
    }else {
        header("Location: ../view/index.php");
    }
} catch (\Throwable $th) {
    header("Location: ../view/error.php");
}
?>
</body>
</html>
