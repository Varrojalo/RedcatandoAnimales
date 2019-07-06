<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha Animal | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
</head>
<body class="bg-primary">
    <?php
    include_once '../model/dao/AnimalDao.php';
    include_once '../model/dao/AdopcionDao.php';
    include_once '../model/dao/AdoptanteDao.php';
    include_once '../model/dao/RazaDao.php';
    include_once '../model/dao/EspecieDao.php';
    include_once '../model/dao/RazaDao.php';
    include_once '../model/dao/DiagnosticoDao.php';

    $codigo = $_GET["cod"];
    $aDao = new AnimalDao();
    $adopDao = new AdopcionDao();
    $espDao = new EspecieDao();
    $rDao = new RazaDao();
    $adpDao = new AdoptanteDao();
    $diagDao = new DiagnosticoDao();

    $animal = $aDao->buscarAnimal($codigo);
    $adopcion = $adopDao->buscarAdopcionAnimal($animal->getID());
    $especie = $espDao->buscarEspecieRazaID($animal->getRaza()->getID());
    $raza = $rDao->buscarRazaID($animal->getRaza()->getID());
    $adoptanteID = is_null($adopcion)?NULL:$adopcion->getAdoptante()->getID();
    $adoptante = $adpDao->buscarAdoptanteID($adoptanteID);
    $diagnosticos = $diagDao->buscarDiagnosticosAnimal($animal->getID());

    $fechaIngreso = new DateTime($animal->getFechaIngreso());

    ?>
    <div class="container container-fluid">
        <div class="my-3 shadow p-3 bg-white rounded">
            <div class="row">
                <div class="col-md-8">
                    <h2>Ficha de Animal</h2>
                </div>
                <div class="col-md-2">
                    <a href="update-animal.php?cod=<?php echo $animal->getID()."&codOrg=".$animal->getCodigoOrganizacion();?>" class="btn btn-link text-muted font-weight-bold"><i class="fas fa-edit"></i> EDITAR</a>
                </div>
                <div class="col-md-2">
                    <a href="adopt-animal.php?cod=<?php echo $animal->getID()."&codOrg=".$animal->getCodigoOrganizacion();?>" class="btn btn-link text-muted font-weight-bold"><i class="fas fa-heart"></i> ADOPTAR</a>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <?php
                echo "<div class='row'>";
                echo "<div class='col-md-6'>";
                echo "<img class='img-fluid' src='/RedcatandoAnimales/RedcatandoAnimales".$animal->getURL()."'>";
                echo "</div>";
                echo "<div class='col-md-6'>";
                if($animal->getEstado()=="" || $animal->getEstado()=="diagnostico pendiente")
                {
                    echo "<h4 class='text-capitalized'>".$animal->getNombre()."</h4>";
                }
                else{
                    if($animal->getEstado() == "adoptado")
                    {
                        echo "<h4>".$animal->getNombre()." <span class='badge badge-primary text-uppercase'>".$animal->getEstado()."</span></h4>";
                    }
                    else if($animal->getEstado() == "muerto")
                    {
                        echo "<h4>".$animal->getNombre()." <span class='badge badge-danger text-uppercase'>".$animal->getEstado()."</span></h4>";
                    }
                    
                }
                echo "<p><strong>Nº CHIP: </strong> ".$animal->getChip()."</p>";
                if($especie->getNombre()=="canino"){
                    echo "<p><strong>Especie: </strong><span class='fas fa-dog fa-2x'></span></p>";
                }
                else{
                    echo "<p><strong>Especie: </strong><span class='fas fa-cat fa-2x'></span></p>";
                }
                echo "<p><strong>Raza: </strong> ".$raza->getNombre()."</p>";
                echo "<p><strong>Fecha de Nacimiento: </strong> ".$animal->getFechaNacimiento()."</p>";
                echo "<p><strong>Patron: </strong> ".$animal->getPatron()."</p>";
                if($animal->isEsterilizado()==1)
                {
                    echo "<p><strong>Esterilizado: </strong> <span class='fas fa-check-circle fa-2x text-success'></span></p>";
                }
                else
                {
                    echo "<p><strong>Esterilizado: </strong> <span class='fas fa-times-circle fa-2x text-danger'></span></p>";
                }
                if($animal->getSexo()=='h'){
                        echo "<p><strong>Sexo: </strong><span class='fas fa-venus text-danger fa-2x'></span></p>";
                }
                else
                {
                        echo "<p><strong>Sexo: </strong><span class='fas fa-mars text-info fa-2x'></span></p>";
                }
                        echo "<p><strong>Fecha de Ingreso: </strong>".$fechaIngreso->format("Y-m-d")."</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                if(empty($animal->getObservacion())&&is_null($adoptanteID))
                {
                }
                else
                {
                    if(is_null($adoptanteID))
                    {
                        echo "<div class='col-md-12'>";
                        echo "<strong>Observacion: </strong>";
                        echo "<p>".$animal->getObservacion()."</p>";
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='col-md-6'>";
                        echo "<strong>Observacion: </strong>";
                        echo "<p>".$animal->getObservacion()."</p>";
                        echo "</div>";
                        echo "<div class='col-md-6'>";
                        echo "<h5>Datos del dueño: </h5>";
                        echo "<div class='dropdown-divider'></div>";
                        echo "<p><strong>RUT:</strong><a class='btn btn-link' href='view-adoptant.php?cod=".$adoptante->getID()."'>".$adoptante->getRut()."</a>";
                        echo "<p><strong>Nombre: </strong> ".$adoptante->getNombreCompleto()."</p>";
                        echo "<p><strong>Puntuación: </strong> ".$adoptante->getPuntuacion()."</p>";
                        echo "</div>";
                    }
                }
                echo "<div class='col-md-12'>";
                echo "<div class='dropdown-divider'></div>";
                echo "</div>";                
                echo "<div class='col-md-9'>";
                echo "<h3>Diagnosticos</h3>";
                echo "</div>";
                echo "<div class='col-md-3'>";
                echo "<a href='register-diagnosis.php?cod=".$_GET["cod"]."&codOrg=".$_GET["codOrg"]."' class='btn btn-primary btn-block text-white'>NUEVO DIAGNOSTICO</a>";
                echo "</div>";
                echo "<div class='col-md-12 mt-3'>";
                if(!empty($diagnosticos) || !is_null($diagnosticos))
                {
                    echo "<table class='border border-dark mb-5 table table-responsive-sm table-light table-striped table-borderless text-center'>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr>";
                    echo "<th scope='col'>NOMBRE</th>";
                    echo "<th scope='col'>DESCRIPCIÓN</th>";
                    echo "<th scope='col'>ACCIONES</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody class='table-body filasBody'>";
                    foreach ($diagnosticos as $diag) {
                        echo "<tr>";
                        echo "<td scope='col'>".$diag->getNombre()."</td>";
                        echo "<td scope='col'>".$diag->getDescripcion()."</td>";
                        echo "<td scope='col'><a href='../controller/procesarIngresoAnimal.php?btnEliminarAnimal=btnEliminarAnimal&cod=".$diag->getID()."' name='btnEliminarAnimal' class='btn btn-link text-danger fas fa-times-circle'></a></td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                }
                else
                {
                    echo "<p>NO HAY DIAGNOSTICOS DISPONIBLES</p>";
                }
                echo "</div>";
                echo "</div>";
            ?>
            
            <a href="history-animal.php?codOrg=<?php echo $_GET["codOrg"]?>" class="btn btn-link">ATRAS</a>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>