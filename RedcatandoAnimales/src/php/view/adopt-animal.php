<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptar Animal | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
</head>
<body>
<body class="bg-primary">
    <?php
        include_once '../model/dao/AnimalDao.php';
        include_once '../model/dao/RazaDao.php';
        include_once '../model/dto/Animal.php';
        
        $aDao = new AnimalDao();
        $rDao = new RazaDao();
        $animal = $aDao->buscarAnimal($_GET["cod"]);
        $raza = $rDao->buscarRazaId($animal->getRaza()->getID());
    ?>
    <div class="container container-fluid">
        <div class="my-3 shadow p-3 bg-white rounded">
            <h2>Adoptar Animal</h2>
            <form action="../controller/procesarIngresoAnimal.php" id="adoptarAnimal" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Datos del Animal</h5>
                        <div class='dropdown-divider'></div>
                        <div class="form-group d-none">
                        <?php
                            echo "<input type='text' value=".$_GET["codOrg"]." name='organizacion' class='form-control' readonly>";
                            echo "<input type='text' value=".$_GET["cod"]." name='codigo' class='form-control' readonly>";
                        ?>
                        </div>
                        <div class="form-group row">
                            <label for="chip" class="col-sm-4 col-form-label font-weight-bold">Nº CHIP:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="chip" name="chip" value="<?php echo $animal->getChip();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaIngreso" class="col-sm-4 col-form-label font-weight-bold">Fecha de Ingreso:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="fechaIngreso" name="fechaIngreso" value="<?php echo $animal->getFechaIngreso();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label font-weight-bold">Nombre:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="nombre" name="nombre" value="<?php echo $animal->getNombre();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edad" class="col-sm-4 col-form-label font-weight-bold">Fecha de Nacimiento:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="edad" name="edad" value="<?php echo $animal->getFechaNacimiento();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sexo" class="col-sm-4 col-form-label font-weight-bold">Sexo:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="sexo" name="sexo" value="<?php echo $animal->getSexo();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="raza" class="col-sm-4 col-form-label font-weight-bold">Raza:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="raza" name="raza" value="<?php echo $raza->getID();?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="patron" class="col-sm-4 col-form-label font-weight-bold">Patrón:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="patron" name="patron" value="<?php echo $animal->getPatron();?>">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <h5>Adoptante</h5>
                        <div class='dropdown-divider'></div>
                        <div class="form-group">
                            <label for="listaAdoptantes">Adoptantes registrados:</label>
                            <select name="listaAdoptantes" id="listaAdoptantes" class="form-control">
                            <?php
                                include "../controller/procesarIngresoAnimal.php";
                                llenarListaAdoptantes();
                            ?>
                            </select>
                        </div>
                        <div class="form-group d-none">
                            <label for="listaUsuarios">Socios registrados:</label>
                            <input type="text" readonly name="usuario" id="usuario" class="form-control" value="<?php echo $_SESSION["usuarioID"];?>">
                        </div>
                        
                        <div class="d-none">
                        <h3>Nuevo Adoptante</h3>
                        <div class='dropdown-divider'></div>
                        <form action="../controller/procesarIngresoAnimal.php" id="registroNuevoAdoptante" method="POST">
                            <div class="form-group">
                                <label for="rutAdopt">RUT:</label>
                                <input type="text" name="rutAdopt" id="rutAdopt" class="form-control" placeholder="Ej: 12345678-9">
                            </div>
                            <div class="form-group">
                                <label for="nombreAdopt">Nombre:</label>
                                <input type="text" name="nombreAdopt" id="nombreAdopt" class="form-control" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="apAdopt">Apellido Paterno:</label>
                                <input type="text" name="apAdopt" id="apAdopt" class="form-control" placeholder="Ingrese su apellido paterno">
                            </div>
                            <div class="form-group">
                                <label for="amAdopt">Apellido Materno:</label>
                                <input type="text" name="amAdopt" id="amAdopt" class="form-control" placeholder="Ingrese su apellido materno">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="registrarAdoptante" form="registroNuevoAdoptante" class="btn btn-primary">REGISTRAR ADOPTANTE</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <button type="submit" name="btnAdoptarAnimal" form="adoptarAnimal" class="btn btn-primary">ADOPTAR</button>
                        <?php
                            echo "<a href='history-animal.php?codOrg=".$_GET["codOrg"]."' class='btn btn-link'>CANCELAR</a>";
                        ?> 
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</html>