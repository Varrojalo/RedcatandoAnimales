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
        include_once '../model/dao/AnimalDao.php';
        include_once '../model/dto/Animal.php';

        date_default_timezone_set('mst');

        $fechaActual = date("Y-m-j");
        $animal = new Animal(codigo,organizacion,new Dueño(NULL,NULL,NULL,NULL,NULL,NULL),$_POST["nombre"],$_POST["edad"],$fechaActual,$_POST["listaEspecies"],
        $_POST["listaRazas"],$_POST["listaPatrones"],$_POST["radioSexo"],$_POST["observacion"],0);
        $aDao = new AnimalDao();
        $aDao->agregarAnimal($animal);
        header("Location:../view/history-animal.php");
        die();
    ?>
</body>
</html>