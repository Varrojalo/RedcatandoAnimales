﻿<?php

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
            header("Location: ../view/history-animal.php");
        }
        else if(isset($_GET["btnEliminarAnimal"]))
        {
            try {
                eliminarAnimal();
            } catch (Exception $e) {
                die('Error modificando producto: '.$e->getMessage());
            }
            header("Location: ../view/history-animal.php");
        }
        else if(isset($_POST["btnActualizarAnimal"]))
        {
            actualizarAnimal();
        }
        else if(isset($_POST["btnAdoptarAnimal"]))
        {
            adoptarAnimal();
        }
        else if(isset($_POST["btnEliminarSeleccionados"]))
        {
            try {
                EliminarAnimalesSelec();
            } catch (Exception $e) {
                die('Error modificando producto: '.$e->getMessage());
            }
            header("Location: ../view/history-animal.php");
        }
        
        function ingresarAnimal()
        {
            date_default_timezone_set('mst');
            $file = $_FILES["animalURL"];
            
            if(isset($_POST["btnAgregarAnimal"]))
            {
                $target_dir = "/res/imgs/orgs/".$_POST["organizacion"]."/animals/";

                $fileName = $file["name"];
                $fileTmpName = $file["tmp_name"];
                $fileSize = $file["size"];
                $fileError = $file["error"];
                $fileType = $file["type"];

                $fileExt = explode('.',$fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowedExt = array("jpg","jpeg","png","gif");

                //Verifica si la extension es la correcta
                if(is_array($fileActualExt,$allowedExt))
                {
                    //Verificar si hubo un error al subir el archivo
                    if ($fileError === 0) 
                    {
                        //Verifica el tamaño del archivo a subir
                        if ($fileSize < 5000) 
                        {
                            $newName = uniqid('',true).".".$fileActualExt;
                            $fileDestination = $target_dir.$newName;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            
                        }
                        else 
                        {
                            echo "ERROR: El archivo que intento subir pesa más de 5 MB";
                            
                        }
                    }
                    else 
                    {
                        echo "Hubo un error al subir el archivo, porfavor intentelo de nuevo.";    
                        
                    }
                }
                else
                {
                    echo "ERROR: Este tipo de archivos no pueden subirse. Aceptados: (jpg, jpeg, png, gif).";
                    
                }
                $fechaActual = date("Y-m-j");
                $organizacion = new Organizacion($_POST["organizacion"],NULL,NULL);
                $user = new User($_POST["usuario"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                $nombre = $_POST["nombre"];
                $fechaNacimiento = is_null($_POST["fechaNacimiento"])?$_POST["fechaNacimiento"]:'2012-12-12';
                $raza = $_POST["listaRazas"];
                $patron = $_POST["listaPatrones"];
                $sexo = $_POST["radioSexo"];
                $obs = $_POST["observacion"];
                $url = is_null($fileDestination)?"/res/imgs/orgs/".$_POST["organizacion"]."/animals/default-animal.jpg":$fileDestination;
                $chip = $_POST["chip"];
                $animal = new Animal(0,$raza,$organizacion,$user,$url,$chip,$nombre,$patron,$fechaNacimiento,$sexo,$obs,false,"",date("Y-m-d"),NULL);
                $aDao = new AnimalDao();
                $aDao->agregarAnimal($animal);
            }
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
            $animal->setFechaNacimiento($_POST["fechaNacimiento"]);
            $animal->setPatron($_POST["listaPatrones"]);
            $animal->setSexo($_POST["radioSexo"]);
            $animal->setChip($_POST["chip"]);
            $animal->setEstado($_POST["fallecido"]);
            $animal->setEsterilizado($_POST["esterilizado"]);
            $animal->setObservacion($_POST["observacion"]);
            $fechaActualizado = date('Y-m-d H:i:s');
            $animal->setFechaActualizado($fechaActualizado);

            $aDao->actualizarAnimal($animal);
            header("Location: ../view/history-animal.php");
        }

        function adoptarAnimal()
        {
            $aDao = new AdopcionDao();
            $aDao->adoptarAnimal($_POST["codigo"],$_POST["listaAdoptantes"],$_POST["usuario"]);
            header("Location: ../view/history-animal.php");
        }
        function EliminarAnimalesSelec()
        {
            if(!empty($_POST["animSelec"]))
            {
                foreach ($_POST["animSelec"] as $codAnim) {
                    eliminarAnimal($codAnim);
                }
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
                echo "<th scope='row' class='align-middle'><input type='checkbox' name='animSelec' id='animSelec' value='".$a->getID()."'></th>";
                echo "<td class='align-middle'><a class='btn btn-link' href='view-animal.php?cod=".$a->getID()."&codOrg=".$a->getCodigoOrganizacion()."'>" . $a->getNombre(). "</a></td>";
                echo "<td class='align-middle'><span class='d-none'>Edad:".obtenerEdad($a->getFechaNacimiento())."</span>".obtenerEdad($a->getFechaNacimiento()). "</td>";
                echo "<td class='align-middle'>" . $rDao->buscarRazaId($razaID)->getNombre(). "</td>";
                echo "<td class='align-middle'>" . $sexo. "</td>";
                echo "<td class='align-middle'><span class='d-none'>AÑO:".date("Y",strtotime($a->getFechaIngreso()))."</span><span class='d-none'>MES:".date("m",strtotime($a->getFechaIngreso()))."</span><span class='d-none'>DIA:".date("d",strtotime($a->getFechaIngreso()))."</span>". date("Y-m-d",strtotime($a->getFechaIngreso())). "</td>";
                echo "<td class='align-middle'>" . $a->getChip(). "</td>";
                echo "<td class='align-middle'>" . $a->getObservacion(). "</td>";
                echo "<td class='align-middle'><a href='../controller/procesarIngresoAnimal.php?btnEliminarAnimal=btnEliminarAnimal&cod=".$a->getID()."' name='btnEliminarAnimal' class='btn btn-link text-danger fas fa-times-circle'></a>|<a href='update-animal.php?cod=".$a->getID()."&codOrg=".$a->getCodigoOrganizacion()."' class='btn btn-link text-info fas fa-edit'></a></td>";
                echo "</tr>";
            }
        }

        function SubirFotoAnimal($url,$organizacion)
        {
            
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