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
        $org = new Organizacion($_POST["organizacion"],NULL);
        $dueño = new Dueño(NULL,NULL,NULL,NULL,NULL,NULL);
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $especie = $_POST["listaEspecies"];
        $raza = $_POST["listaRazas"];
        $patron = $_POST["listaPatrones"];
        $sexo = $_POST["radioSexo"];
        $obs = $_POST["observacion"];
        $animal = new Animal(generarCodigo(),$org,$dueño,$nombre,$edad,$fechaActual,$especie,$raza,$patron,$sexo,$obs,0);
        $aDao = new AnimalDao();
        $aDao->agregarAnimal($animal);

        header("Location: ../view/history-animal.php?codOrg=".$_POST["organizacion"]."");

        function generarCodigo()
        {
            $prefijo = "ANM-";
            for ($i=0; $i < 6 ; $i++) { 
                $randInt = random_int(0,9);
                $prefijo = $prefijo.$randInt;
            }
            return $prefijo;
        }
    ?>
</body>
</html>