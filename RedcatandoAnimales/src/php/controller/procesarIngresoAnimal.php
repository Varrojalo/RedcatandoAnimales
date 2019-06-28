<?php
$loader = require '../../../vendor/autoload.php';
?>
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
        include_once '../model/dao/DueñoDao.php';
        include_once '../model/dto/Animal.php';


        if(isset($_POST["btnAgregarAnimal"]))
        {
            ingresarAnimal();
        }
        else if(isset($_GET["btnEliminarAnimal"]))
        {
            try {
                eliminarAnimal();
            } catch (Exception $e) {
                die('Error modificando producto: '.$e->getMessage());
            }
            header("Location: ../view/history-animal.php?codOrg=".$_GET["organizacion"]."");
        }
        else if(isset($_POST["btnActualizarAnimal"]))
        {
            actualizarAnimal();
        }
        else if(isset($_POST["btnAdoptarAnimal"]))
        {
            adoptarAnimal();
        }

        function ingresarAnimal()
        {
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
        }

        function eliminarAnimal()
        {
            $codigo = $_GET["cod"];
            
            $aDao = new AnimalDao();
            
            $aDao->eliminarAnimalCod($codigo);
        }
        function actualizarAnimal()
        {
            $aDao = new AnimalDao();
            $animal = $aDao->buscarAnimal($_POST["codigo"]);
            $animal->setNombre($_POST["nombre"]);
            $animal->setEdad($_POST["edad"]);
            $animal->setPatron($_POST["listaPatrones"]);
            $animal->setSexo($_POST["radioSexo"]);
            $animal->setChip($_POST["chip"]);
            $animal->setObservacion($_POST["observacion"]);


            $aDao->actualizarAnimal($animal);
            header("Location: ../view/history-animal.php?codOrg=".$_POST["organizacion"]."");
        }

        function adoptarAnimal()
        {
            $aDao = new AnimalDao();
         

            $aDao->adoptarAnimal($_POST["codigo"],$_POST["listaAdoptantes"]);
            header("Location: ../view/history-animal.php?codOrg=".$_POST["organizacion"]."");
        }
        function EliminarAnimalesSelec()
        {
            foreach ($selec as $codAnim) {
                eliminarAnimal($codAnim);
            }
        }


        function generarCodigo()
        {
            $prefijo = "ANM-";
            for ($i=0; $i < 6 ; $i++) { 
                $randInt = random_int(0,9);
                $prefijo = $prefijo.$randInt;
            }
            return $prefijo;
        }

        function llenarTabla($codOrg)
        {
            $aDao = new AnimalDao();
            $animales = $aDao->buscarAnimalesOrganizacion($codOrg);
            foreach ($animales as $a) {
                //$sexo = "macho";
                $sexo = "<i class='fas fa-mars fa-2x text-info'><span class='d-none'>macho</span></i>";
                if($a->getSexo()=='h')
                {
                    //$sexo = "hembra"; 
                    $sexo = "<i class='fas fa-venus fa-2x text-danger'><span class='d-none'>hembra</span></i>";
                }
                if($a->getCodigoDueño()==NULL)
                {
                    echo "<tr><td class='d-none'>RESCATADO</td>";
                }
                else
                {
                    echo "<tr class='table-success'><td class='d-none'>ADOPTADO</td>";
                }
                echo "<th scope='row'><input type='checkbox' name='".$a->getCodigo()."' id='".$a->getCodigo()."'></th>";
                echo "<td><a class='btn btn-link' href='view-animal.php?cod=".$a->getCodigo()."&codOrg=".$a->getCodigoOrganizacion()."'>" . $a->getNombre(). "</a></td>";
                echo "<td>" . $a->getEdad(). "</td>";
                echo "<td>" . $a->getRaza(). "</td>";
                echo "<td>" . $sexo. "</td>";
                echo "<td>" . $a->getFechaIngreso(). "</td>";
                echo "<td>" . $a->getChip(). "</td>";
                echo "<td>" . $a->getObservacion(). "</td>";
                echo "<td><a href='../controller/procesarIngresoAnimal.php?btnEliminarAnimal=btnEliminarAnimal&cod=".$a->getCodigo()."' name='btnEliminarAnimal' class='btn btn-link text-danger fas fa-times-circle'></a>|<a href='update-animal.php?cod=".$a->getCodigo()."&codOrg=".$a->getCodigoOrganizacion()."' class='btn btn-link text-info fas fa-edit'></a></td>";
                echo "</tr>";
            }
        }

        function llenarListaAdoptantes()
        {
            $dDao = new DueñoDao();
            $adoptantes = $dDao->buscarDueños();

            foreach ($adoptantes as $a) {
                echo "<option value=".$a->getCodigo().">".$a->getNombreCompleto()."</option>";
                echo $a->getCodigo();
            }
        }

    ?>
</body>
</html>