<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de Animales | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="/res/imgs/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poller+One" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="mb-3 navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/res/imgs/icon_512px.png" width="32" height="32" alt="">
                <span class="brand-title">REDCATANDOANIMALES</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenido" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContenido">
                <ul class="navbar-nav">
                    <!-- Tab NOTICIAS
                    <li class="nav-item">
                            <a href="" class="nav-link">Noticias</a>
                    </li>
                    -->
                    <li class="navbar-text ">
                        <span class="nav-link active">Historial de animales</span>
                    </li>
                    <li class="navbar-text">
                        <a href="/src/html/history-campaign.html" class="nav-link">Campañas</a>
                    </li>
                    <li class="navbar-text">
                        <a href="/src/html/history-adoptant.html" class="nav-link">Adoptantes</a>
                    </li>
                    <li class="navbar-text">
                        <a href="/src/html/history-volunteer" class="nav-link">Voluntarios</a>
                    </li>
                    <li class="navbar-text">
                        <a href="/src/html/downloads.html" class="nav-link">Documentos</a>
                    </li>
                    <li class="navbar-text">
                        <a href="" class="nav-link">
                            <i class="nav-link fas fa-sign-out-alt "></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container container-fluid">
            <h2>Historial de Animales</h2>
        </div>
        <section class="container container-fluid">
            <form action="#">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Nombre: </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Edad:</label>
                        <input type="number" min=1 max=30 value=10 class="form-control">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Sexo:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioMacho" name="customRadio" class="custom-control-input">
                            <label for="radioMacho" class="custom-control-label">Macho</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioHembra" name="customRadio"class="custom-control-input">
                            <label for="radioHembra" class="custom-control-label">Hembra</label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="selectRaza">Raza: </label>
                        <select id="selectRaza" class="form-control">
                            <option value="">TEST</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="selectFecha">Año de Ingreso: </label>
                        <select id="selectFecha" class="form-control">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 align-self-center pl-5">
                        <button class="btn btn-primary w-100">BUSCAR ANIMAL</button>
                    </div>
                </div>
                
                <table class="border border-dark mb-5 table table-responsive-sm table-light table-striped table-borderless text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha de Ingreso</th>
                            <th scope="col">N° Chip</th>
                            <th scope="col">Observacion</th>
                        </tr>
                    </thead>
                    <tbody class="table-body filasBody">
                        <?php
                            include 'history-animal-control.php';
                            llenarTabla();
                        ?>
                    </tbody>
                </table>
                <section class="py-3  bg-light fixed-bottom">
                    <div class="container container-fluid">                  
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ELIMINAR SELECCIONADOS</button>
                        <a href="/RedcatandoAnimales/src/html/register-animal.html" class="btn btn-link float-right">NUEVO ANIMAL</a>
                    </div>
                </section>
            </form>

        </section>
    </main>
    <!--MODAL-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
      
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="module" src="../js/AnimalDao.js"></script>
<script type="module" src="../js/HistoryAnimalControl.js"></script>
</html>