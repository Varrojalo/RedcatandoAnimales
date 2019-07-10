<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de Animales | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/footable.bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poller+One" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="mb-3 navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/icon_512px.png" width="32" height="32" alt="">
                <span class="brand-title">REDCATANDOANIMALES</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenido" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContenido">
                <ul class="navbar-nav">
                    <li class="navbar-text ">
                        <span class="nav-link active">Animales</span>
                    </li>
                    <li class="navbar-text">
                        <a href="error.php" class="nav-link">Campañas</a>
                    </li>
                    <li class="navbar-text">
                        <a href="error.php" class="nav-link">Adoptantes</a>
                    </li>
                    <li class="navbar-text">
                        <a href="error.php" class="nav-link">Voluntarios</a>
                    </li>
                    <li class="navbar-text">
                        <a href="error.php" class="nav-link">Documentos</a>
                    </li>
                    <li class="navbar-text">
                        <a href="../controller/logout.php" class="nav-link">
                            <i class="nav-link fas fa-sign-out-alt "></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container container-fluid">
            <h2>Lista de Animales</h2>
        </div>
        <section class="container container-fluid">
            <form method="POST" action="../controller/procesarIngresoAnimal.php">
                <div class="row">
                    <div id="filter-container" class="form-group col-md-3">   
                    </div>
                    <div class="form-group col-md-9">
                        <button type="button" class="btn btn-light " data-container="body" data-toggle="popover" data-placement="right">
                            <i class="fas fa-info-circle text-dark fa-2x"></i></button>
                    </div>
                </div>
                
                <table data-filter-container="#filter-container" data-filter-placeholder="Ingrese valor a filtrar" class="border border-dark mb-5 table table-responsive-sm table-light table-striped table-borderless text-center" data-filtering="true" data-filter="#filter">
                    <thead class="thead-dark">
                        <tr>
                            <th class="d-none">estado</th>
                            <th scope="col" data-breakpoints="sm">#</th>
                            <th scope="col" data-type="html" data-breakpoints="xs" name="nombre">Nombre</th>
                            <th scope="col" data-breakpoints="md">Edad</th>
                            <th scope="col" data-breakpoints="sm">Raza</th>
                            <th scope="col" data-breakpoints="xs">Sexo</th>
                            <th scope="col" data-breakpoints="xs">Fecha de Ingreso</th>
                            <th scope="col" data-breakpoints="sm">N° Chip</th>
                            <th scope="col" data-breakpoints="sm">Observación</th>
                            <th scope="col" data-breakpoints="xs">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-body filasBody">
                        <?php
                            
                            include '../controller/procesarIngresoAnimal.php';
                        
                            llenarTabla($_SESSION["org"]);
                        ?>
                    </tbody>
                </table>
                <div class="fixed-bottom"></div>
                <!--TOOLBAR-->
                <section class="py-3  bg-light fixed-bottom">
                    <div class="container container-fluid">                  
                        <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#exampleModal">ELIMINAR SELECCIONADOS</button>
                        <?php
                            echo "<a href='register-animal.php' class='btn btn-link float-right'>NUEVO ANIMAL</a>"
                        ?>
                    </div>
                </section>
                <!--MODAL-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR SELECCIONADOS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Esta a punto de eliminar los elementos seleccionados. Esta accion no se puede deshacer.
                            <p><strong>¿Esta seguro/a que quiere continuar?</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="btnEliminarSeleccionados" id="btnEliminarSeleccionados" class="btn btn-primary">ACEPTAR</button>
                        </div>
                </div>
            </form>
            
        </section>
        <div>.</div>
    </main>     
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/RedcatandoAnimales/RedcatandoAnimales/src/js/footable.min.js"></script>
<script>
    $(document).ready(function () {
        $('.table').footable({
            "filtering": {
                "filters": [{
                    "name": "nombre",
                    "query": "nombre",
                    "columns": ["nombre"]
                }]
            }
	    });
        $('[data-toggle="popover"]').popover({
            trigger: 'hover',
            title: '<h5> Leyendas de estados</h5>',
            content: '<p><i class="fas fa-square fa-lg text-success"></i> = ADOPTADO.</p><p><i class="fas fa-square fa-lg text-danger"></i> = FALLECIDO.</p><p><i class="fas fa-square fa-lg text-info"></i> = DIAGNÓSTICO PENDIENTE.</p>',
            html: true
    });
    });
</script>
</html>