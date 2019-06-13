<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Animal | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
</head>
<body class="bg-primary">
    <div class="container container-fluid">
        <div class="my-3 shadow p-3 bg-white rounded">
            <div class="row">
                <div class="col-md-8">
                    <h2>Ficha de Animal</h2>
                </div>
                <div class="col-md-2">
                    <a href="" class="btn btn-link text-muted font-weight-bold"><i class="fas fa-edit"></i> EDITAR</a>
                </div>
                <div class="col-md-2">
                    <a href="" class="btn btn-link text-muted font-weight-bold"><i class="fas fa-heart"></i> ADOPTAR</a>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <?php
                include_once '../model/dao/AnimalDao.php';
                $codigo = $_GET["cod"];
                $aDao = new AnimalDao();

                $animal = $aDao->buscarAnimal($codigo);

                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                if($animal->getCodigoDueño() == NULL)
                {
                    echo "<h4 class='text-capitalized'>".$animal->getNombre()."</h4>";
                }
                else{
                    echo "<h4>".$animal->getNombre()." <span class='badge badge-primary'>ADOPTADO</span></h4>";
                }
                echo "</div>";
                echo "<div class='col-md-3'>";
                echo "<p><strong>Nº CHIP: </strong> ".$animal->getChip()."</p>";
                echo "</div>";
                if($animal->getEspecie()=="perro"){
                    echo "<div class='col-md-2'>";
                    echo "<p><strong>Especie: </strong><span class='fas fa-dog fa-2x'></span></p>";
                    echo "</div>";
                }
                else{
                    echo "<div class='col-md-2'>";
                    echo "<p><strong>Especie: </strong><span class='fas fa-cat fa-2x'></span></p>";
                    echo "</div>";
                }

                echo "<div class='col-md-3'>";
                echo "<p><strong>Raza: </strong> ".$animal->getRaza()."</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-3'>";
                echo "<p><strong>Edad: </strong> ".$animal->getEdad()."</p>";
                echo "</div>";
                echo "<div class='col-md-3'>";
                echo "<p><strong>Patron: </strong> ".$animal->getPatron()."</p>";
                echo "</div>";
                if($animal->getSexo()=='h'){
                    echo "<div class='col-md-2'>";
                    echo "<p><strong>Sexo: </strong><span class='fas fa-venus fa-2x'></span></p>";
                    echo "</div>";
                }
                else
                {
                    echo "<div class='col-md-2'>";
                    echo "<p><strong>Sexo: </strong><span class='fas fa-mars fa-2x'></span></p>";
                    echo "</div>";
                }
                echo "<div class='col-md-4'>";
                echo "<p><strong>Fecha de Ingreso: </strong>".$animal->getFechaIngreso()."</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                if($animal->getCodigoDueño()==NULL)
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
                    echo "<p><strong>Dueño: </strong> Sebastian Hidalgo</p>";
                    //echo "<p><strong>Dueño: </strong> ".$animal->getDueño()->getNombre()."</p>";
                    echo "</div>";
                }
                echo "</div>";
            ?>
            
            <a href="history-animal.php" class="btn btn-link">ATRAS</a>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>