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
                <div class="col-md-10">
                    <h2>Ficha de Animal</h2>
                </div>
                <div class="col-md-2">
                    <a href="" class="btn btn-link text-muted font-weight-bold"><i class="fas fa-edit"></i>  EDITAR</a>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <?php
                include_once '../model/dao/AnimalDao.php';
                echo "<div class='row'>";
                echo "<div class='col-md-4'>";
                echo "<h4>Pepa <span class='badge badge-primary'>ADOPTADO</span></h4>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "<p><strong>Especie: </strong><span class='fas fa-dog'></span></p>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "<p><strong>Raza: </strong> Quiltro</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-3'>";
                echo "<p><strong>Edad: </strong> 4</p>";
                echo "</div>";
                echo "<div class='col-md-3'>";
                echo "<p><strong>Patron: </strong> Negro</p>";
                echo "</div>";
                echo "<div class='col-md-2'>";
                echo "<p><strong>Sexo: </strong><span class='fas fa-venus '></span></p>";
                echo "</div>";
                echo "<div class='col-md-4'>";
                echo "<p><strong>Fecha de Ingreso: </strong>2019-05-19</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                echo "<div class='col-md-6'>";
                echo "<strong>Observacion: </strong>";
                echo "<p>Pata derecha rota</p>";
                echo "</div>";
                echo "<div class='col-md-6'>";
                echo "<h5>Datos del dueño: </h5>";
                echo "<div class='dropdown-divider'></div>";
                echo "<p><strong>Nº CHIP: </strong> 111111111111111</p>";
                echo "<p><strong>Dueño: </strong> Sebastian Hidalgo Toro</p>";
                echo "</div>";
                echo "</div>";
            ?>
            
            <a href="history-animal.php" class="btn btn-link">ATRAS</a>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>