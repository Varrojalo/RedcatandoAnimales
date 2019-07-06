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
        include_once '../model/dao/AdoptanteDao.php';
        include_once '../model/dao/RazaDao.php';
        include_once '../model/dao/UserDao.php';
        include_once '../model/dao/AdopcionDao.php';
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
            header("Location: ../view/history-animal.php?codOrg=".$_GET["codOrg"]."");
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
            $org = new Organizacion($_POST["organizacion"],NULL,NULL);
            $user = new User(0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
            $dueño = new Dueño(NULL,NULL,NULL,NULL,NULL,NULL);
            $nombre = $_POST["nombre"];
            $fechaNacimiento = $_POST["fechaNacimiento"];
            $raza = $_POST["listaRazas"];
            $patron = $_POST["listaPatrones"];
            $sexo = $_POST["radioSexo"];
            $obs = $_POST["observacion"];
            $animal = new Animal(0,$raza,$org,$user,0,$nombre,$patron,$fechaNacimiento,$sexo,$obs,false,"",date("today"),NULL);
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
            $aDao = new AdopcionDao();
            $aDao->adoptarAnimal($_POST["codigo"],$_POST["listaAdoptantes"],$_POST["listaUsuarios"]);
            header("Location: ../view/history-animal.php?codOrg=".$_POST["organizacion"]."");
        }
        function EliminarAnimalesSelec()
        {
            foreach ($selec as $codAnim) {
                eliminarAnimal($codAnim);
            }
        }

        function llenarTabla($codOrg)
        {
            $aDao = new AnimalDao();
            $rDao = new RazaDao();
            $animales = $aDao->buscarAnimalesOrganizacion($codOrg);
            foreach ($animales as $a) {
                $adopDao = new AdopcionDao();
                $adopcion = $adopDao->buscarAdopcionAnimal($a->getID());  

                //sexo "macho"
                $sexo = "<i class='fas fa-mars fa-2x text-info'><span class='d-none'>macho</span></i>";
                if($a->getSexo()=='h')
                {
                    //sexo "hembra" 
                    $sexo = "<i class='fas fa-venus fa-2x text-danger'><span class='d-none'>hembra</span></i>";
                }
                $razaID = $a->getRaza()->getID();
                if($a->getEstado()=="")
                {
                    echo "<tr><td class='d-none'>SIN ESTADO</td>";    
                }
                else if ($a->getEstado()=="adoptado")
                {
                    echo "<tr class='table-success'><td class='d-none'>".$a->getEstado()."</td>";
                }
                else if ($a->getEstado()=="muerto")
                {
                    echo "<tr class='table-danger'><td class='d-none'>".$a->getEstado()."</td>";
                }
                else if ($a->getEstado()=="diagnostico pendiente")
                {
                    echo "<tr class='table-info'><td class='d-none'>".$a->getEstado()."</td>";
                }
                echo "<th scope='row'><input type='checkbox' name='".$a->getID()."' id='".$a->getID()."'></th>";
                echo "<td><a class='btn btn-link' href='view-animal.php?cod=".$a->getID()."&codOrg=".$a->getCodigoOrganizacion()."'>" . $a->getNombre(). "</a></td>";
                echo "<td><span class='d-none'>Edad:".obtenerEdad($a->getFechaNacimiento())."</span>".obtenerEdad($a->getFechaNacimiento()). "</td>";
                echo "<td>" . $rDao->buscarRazaId($razaID)->getNombre(). "</td>";
                echo "<td>" . $sexo. "</td>";
                echo "<td><span class='d-none'>AÑO:".date("Y",strtotime($a->getFechaIngreso()))."</span><span class='d-none'>MES:".date("m",strtotime($a->getFechaIngreso()))."</span><span class='d-none'>DIA:".date("d",strtotime($a->getFechaIngreso()))."</span>". date("Y-m-d",strtotime($a->getFechaIngreso())). "</td>";
                echo "<td>" . $a->getChip(). "</td>";
                echo "<td>" . $a->getObservacion(). "</td>";
                echo "<td><a href='../controller/procesarIngresoAnimal.php?btnEliminarAnimal=btnEliminarAnimal&cod=".$a->getID()."' name='btnEliminarAnimal' class='btn btn-link text-danger fas fa-times-circle'></a>|<a href='update-animal.php?cod=".$a->getID()."&codOrg=".$a->getCodigoOrganizacion()."' class='btn btn-link text-info fas fa-edit'></a></td>";
                echo "</tr>";
            }
        }

        function llenarListaUsuarios($codOrg)
        {
            $uDao = new UserDao();
            $usuarios = $uDao->buscarUsuariosOrganizacion($codOrg);

            foreach ($usuarios as $u) {
                echo "<option value=".$u->getID().">".$u->getNombreCompleto()."</option>";
            }
        }
        function llenarListaAdoptantes()
        {
            $adoDao = new AdoptanteDao();
            $adoptantes = $adoDao->buscarAdoptantes();

            foreach ($adoptantes as $a) {
                echo "<option value=".$a->getID().">".$a->getNombreCompleto()."</option>";
                echo $a->getID();
            }
        }
        function obtenerEdad($fechaNacimiento)
        {
            # object oriented
            $from = new DateTime($fechaNacimiento);
            $to   = new DateTime('today');
            return $from->diff($to)->y;
        }
    ?>
</body>
</html>