<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenid@ | Redcatando Animales</title>
    
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
    
</head>
<body class="bg-primary">
    <main>
        <div class="container container-fluid">
            <div class="my-5 align-self-middle shadow p-3 bg-white rounded">
                <div class="header-logo mx-5 text-center">
                    <img src="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/logo_dark_1024x512.png" width="512" height="256" class="img-fluid my-3">
                    <h1>Iniciar Sesion</h1>
                </div>
                <div class="content">
                    <form action="#">
                        <div class="form-group">
                            <label>RUT:</label>
                            <input placeholder="Ej: 1234567-8" id="rut" name="rut" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contraseña:</label>
                            <input id="contraseña" name="pa" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block" onclick="ValidarCredenciales()">INICIAR SESION</button>
                            <btn class="btn btn-link btn-lg btn-block">REGISTRARSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="LoginControl.js"></script>
</html>