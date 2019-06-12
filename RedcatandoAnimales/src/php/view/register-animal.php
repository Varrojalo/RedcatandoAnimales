<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Animal | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
</head>
<body class="bg-primary">
    <div class="container container-fluid">
        <div class="my-3 shadow p-3 bg-white rounded">
            <h2>Registrar Animal</h2>
            <form action="../controller/procesarIngresoAnimal.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="listaEspecies">Especie:</label>
                        <select id="listaEspecies" class="form-control">
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="listaRazas">Raza: </label>
                        <select name="" id="listaRazas" class="form-control">
                            <option value="">RAZA</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Edad: </label>
                        <input type="number" class="form-control" min="1" max="30" value="10">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Sexo: </label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="radioMacho" name="radioSexo">
                            <label class="custom-control-label" for="radioMacho">Macho</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="radioHembra" name="radioSexo">
                            <label class="custom-control-label" for="radioHembra">Hembra</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Observacion: </label>
                    <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">REGISTRAR</button>
                    <a href="history-animal.php" class="btn btn-link">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>