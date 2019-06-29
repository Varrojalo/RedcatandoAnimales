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

$rut = $_GET["rut"];
$pass = $_GET["pa"];

$uDao = new UserDao();

$usuario = $uDao->buscarUsuario($rut);

if ($usuario->getPass() == $pass) { //IMPORTANTE AGREGAR ENCRIPCION
    session_start();
    $_SESSION["usuario"]=$usuario;
    header("Location: ../view/history-animal.php?codOrg= ORG-001");
}else {
    header("Location: ../view/index.php");
}
?>
</body>
