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
include_once '../model/dao/SocioDao.php';
include_once '../model/dto/Socio.php';

$rut = $_GET["rut"];
$pass = $_GET["pa"];

$sDao = new SocioDao();

$socio = $sDao->buscarSocio($rut);

if ($socio->getPass() == $pass) { //IMPORTANTE AGREGAR ENCRIPCION
    header("Location: ../view/history-animal.php?codOrg=".$socio->getCodigoOrganizacion());
}else {
    header("Location: ../view/index.php");
}
?>
</body>
