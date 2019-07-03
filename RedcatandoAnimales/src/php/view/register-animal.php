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
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group d-none">
                        <?php
                            echo "<input type='text' value=".$_GET["codOrg"]." name='organizacion' class='form-control' readonly>";
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="listaEspecies">Especie:</label>
                        <select id="listaEspecies" name="listaEspecies" class="form-control">
                            <option value="canino">Canino</option>
                            <option value="felino">felino</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="listaRazas">Raza: </label>
                        <select name="listaRazas" id="listaRazas" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fechaNacimiento">Fecha de Nacimiento: </label>
                        <input type="date" name="fechaNacimiento" max="<?php echo date("Y-m-d");?>" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Sexo: </label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="radioMacho" value="m" name="radioSexo">
                            <label class="custom-control-label" for="radioMacho">Macho</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="radioHembra" value="h" name="radioSexo">
                            <label class="custom-control-label" for="radioHembra">Hembra</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="listaPatrones">Patron: </label>
                        <select name="listaPatrones" id="listaPatrones" class="form-control">
                            <option value="RAYAS_ATIGRADO">RAYAS/ATIGRADO</option>
                            <option value="MANCHAS_PARCHES">MANCHAS/PARCHES</option>
                            <option value="PUNTAS_DE_OTRO_COLOR">PUNTAS DE OTRO COLOR</option>
                            <option value="BANDAS_FRANJAS">BANDAS O FRANJAS</option>
                            <option value="JASPEADO">JASPEADO</option>
                            <option value="SOMBREADO_LEONADO">SOMBREADO/LEONADO</option>
                            <option value="NINGUNO">NINGUNO</option>
                            <option value="NO_SE_SEÑALA">NO SE SEÑALA</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Observacion: </label>
                    <textarea name="observacion" id="" cols="30" rows="9" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="btnAgregarAnimal" class="btn btn-primary">REGISTRAR</button>
                    <?php
                        echo "<a href='history-animal.php?codOrg=".$_GET["codOrg"]."' class='btn btn-link'>CANCELAR</a>";
                    ?> 
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $("#listaEspecies").change(function () { 
        //alert( "Valor a cambiado a: "+$("#listaEspecies").val() );
        let especie = $("#listaEspecies").val();

        if(especie == "perro")
        {
            $("#listaRazas").empty();
            $("#listaRazas").append("<option value='AFFENPINSCHER'>AFFENPINSCHER</option><option value='AKITA AMERICANO'>AKITA AMERICANO</option><option value='AKITA INU'>AKITA INU</option><option value='AMERICAN BULLY'>AMERICAN BULLY</option><option value='AMSTAFF'>AMSTAFF</option><option value='BASSET HOUND'>BASSET HOUND</option><option value='BEAGLE'>BEAGLE</option><option value='BICHÓN FRISÉ'>BICHÓN FRISÉ</option><option value='BICHÓN HABANERO'>BICHÓN HABANERO</option><option value='BICHÓN MALTÉS'>BICHÓN MALTÉS</option><option value='BOBTAIL'>BOBTAIL</option><option value='BOERBOEL'>BOERBOEL</option><option value='BORDER COLLIE'>BORDER COLLIE</option><option value='BOSTON TERRIER'>BOSTON TERRIER</option><option value='BÓXER'>BÓXER</option><option value='BOYERO DE BERNA'>BOYERO DE BERNA</option><option value='BULL DOG FRANCÉS'>BULL DOG FRANCÉS</option><option value='BULL DOG INGLÉS'>BULL DOG INGLÉS</option><option value='BULL TERRIER MINIATURA'>BULL TERRIER MINIATURA</option><option value='BULLMASTIFF'>BULLMASTIFF</option><option value='CAIRN TERRIER'>CAIRN TERRIER</option><option value='CANE CORSO'>CANE CORSO</option><option value='CANICHE TOY'>CANICHE TOY</option><option value='CAVALIER KING CHARLES SPANIEL'>CAVALIER KING CHARLES SPANIEL</option><option value='CHIHUAHUA'>CHIHUAHUA</option><option value='CIRNECO DEL ETNA'>CIRNECO DEL ETNA</option><option value='COCKER SPANIEL'>COCKER SPANIEL</option><option value='CRESTADO CHINO'>CRESTADO CHINO</option><option value='DÁLMATA'>DÁLMATA</option><option value='DOBERMAN'>DOBERMAN</option><option value='DOGO ARGENTINO'>DOGO ARGENTINO</option><option value='DOGO DE BURDEOS'>DOGO DE BURDEOS</option><option value='FILA BRASILEIRO'>FILA BRASILEIRO</option><option value='GALGO ESPAÑOL'>GALGO ESPAÑOL</option><option value='GALGO ITALIANO'>GALGO ITALIANO</option><option value='GOLDEN RETRIEVER'>GOLDEN RETRIEVER</option><option value='GRAN DANÉS'>GRAN DANÉS</option><option value='HUSKY SIBERIANO'>HUSKY SIBERIANO</option><option value='JACK RUSSELL TERRIER'>JACK RUSSELL TERRIER</option><option value='KANGAL TURCO'>KANGAL TURCO</option><option value='KOMONDOR'>KOMONDOR</option><option value='LABRADOR NEGRO'>LABRADOR NEGRO</option><option value='LHASA APSO'>LHASA APSO</option><option value='LOBERO IRLANDÉS'>LOBERO IRLANDÉS</option><option value='MASTÍN INGLÉS'>MASTÍN INGLÉS</option><option value='MASTÍN TIBETANO'>MASTÍN TIBETANO</option><option value='PACHÓN NAVARRO'>PACHÓN NAVARRO</option><option value='PAPILLÓN'>PAPILLÓN</option><option value='PASTOR ALEMÁN'>PASTOR ALEMÁN</option><option value='PASTOR ALEMÁN BLANCO'>PASTOR ALEMÁN BLANCO</option><option value='PASTOR AUSTRALIANO MINIATURA'>PASTOR AUSTRALIANO MINIATURA</option><option value='PASTOR BELGA'>PASTOR BELGA</option><option value='PASTOR BELGA MALINOIS'>PASTOR BELGA MALINOIS</option><option value='PASTOR CAUCÁSICO'>PASTOR CAUCÁSICO</option><option value='PASTOR OVEJERO AUSTRALIANO'>PASTOR OVEJERO AUSTRALIANO</option><option value='PEKINÉS'>PEKINÉS</option><option value='PEQUEÑO BRABANTINO'>PEQUEÑO BRABANTINO</option><option value='PERRO AGUAS ESPAÑOL'>PERRO AGUAS ESPAÑOL</option><option value='PERRO CORGI'>PERRO CORGI</option><option value='PERRO DE AGUA PORTUGUÉS'>PERRO DE AGUA PORTUGUÉS</option><option value='PERRO DE SAN HUBERTO'>PERRO DE SAN HUBERTO</option><option value='PERRO LOBO CHECOSLOVACO'>PERRO LOBO CHECOSLOVACO</option><option value='PERRO LOBO HERREÑO'>PERRO LOBO HERREÑO</option><option value='PERRO PINSCHER'>PERRO PINSCHER</option><option value='PERROS PITBULL AMERICANOS'>PERROS PITBULL AMERICANOS</option><option value='PERROS SCHNAUZER'>PERROS SCHNAUZER</option><option value='PERROS SHITZU O SHIH TZU'>PERROS SHITZU O SHIH TZU</option><option value='POMERANIA'>POMERANIA</option><option value='PRESA CANARIO'>PRESA CANARIO</option><option value='PUG CARLINO'>PUG CARLINO</option><option value='MESTIZO'>MESTIZO</option><option value='ROTTWEILER'>ROTTWEILER</option><option value='SAN BERNARDO'>SAN BERNARDO</option><option value='SHAR PEI'>SHAR PEI</option><option value='SHIBA INU'>SHIBA INU</option><option value='STAFFORDSHIRE BULL TERRIER'>STAFFORDSHIRE BULL TERRIER</option><option value='TECKEL DE PELO LARGO'>TECKEL DE PELO LARGO</option><option value='TERRANOVA'>TERRANOVA</option><option value='TIGRE ANDINO DE DOS NARICES'>TIGRE ANDINO DE DOS NARICES</option><option value='TOSA INU'>TOSA INU</option><option value='WESTIE'>WESTIE</option><option value='WHIPPET'>WHIPPET</option><option value='XOLOITZCUINTLE'>XOLOITZCUINTLE</option><option value='YORKSHIRE TERRIER'>YORKSHIRE TERRIER</option>");
        }
        else
        {
            $("#listaRazas").empty();
            $("#listaRazas").append("<option value='ABISINIO'>ABISINIO</option><option value='AMERICAN CURL'>AMERICAN CURL</option><option value='AZUL RUSO'>AZUL RUSO</option><option value='AMERICAN SHORTHAIR'>AMERICAN SHORTHAIR</option><option value='AMERICAN WIREHAIR'>AMERICAN WIREHAIR</option><option value='ANGORA TURCO'>ANGORA TURCO</option><option value='AFRICANO DOMÉSTICO'>AFRICANO DOMÉSTICO</option><option value='BENGALA'>BENGALA</option><option value='BOBTAIL JAPONÉS'>BOBTAIL JAPONÉS</option><option value='BOMBAY'>BOMBAY</option><option value='BOSQUE DE NORUEGA'>BOSQUE DE NORUEGA</option><option value='BRAZILIAN SHORTHAIR'>BRAZILIAN SHORTHAIR</option><option value='BRIVON DE PELO CORTO'>BRIVON DE PELO CORTO</option><option value='BRIVON DE PELO LARGO'>BRIVON DE PELO LARGO</option><option value='BRITISH SHORTHAIR'>BRITISH SHORTHAIR</option><option value='BURMÉS'>BURMÉS</option><option value='BURMILLA'>BURMILLA</option><option value='CORNISH REX'>CORNISH REX</option><option value='CALIFORNIA SPANGLED'>CALIFORNIA SPANGLED</option><option value='CEYLON'>CEYLON</option><option value='CYMRIC'>CYMRIC</option><option value='CHARTREUX'>CHARTREUX</option><option value='DEUTSCH LANGHAAR'>DEUTSCH LANGHAAR</option><option value='DEVON REX'>DEVON REX</option><option value='DORADO AFRICANO'>DORADO AFRICANO</option><option value='DON SPHYNX'>DON SPHYNX</option><option value='DRAGON LI'>DRAGON LI</option><option value='EUROPEO COMÚN'>EUROPEO COMÚN</option><option value='EXÓTICO DE PELO CORTO'>EXÓTICO DE PELO CORTO</option><option value='GATO EUROPEO BICOLOR'>GATO EUROPEO BICOLOR</option><option value='FOLDEX'>FOLDEX</option><option value='GERMAN REX'>GERMAN REX</option><option value='HABANA BROWN'>HABANA BROWN</option><option value='HIMALAYO'>HIMALAYO</option><option value='KORAT'>KORAT</option><option value='KHAO MANEE'>KHAO MANEE</option><option value='MAINE COON'>MAINE COON</option><option value='MANX'>MANX</option><option value='MAU EGIPCIO'>MAU EGIPCIO</option><option value='MUNCHKIN'>MUNCHKIN</option><option value='OCICAT'>OCICAT</option><option value='ORIENTAL'>ORIENTAL</option><option value='ORIENTAL DE PELO LARGO'>ORIENTAL DE PELO LARGO</option><option value='PERFOLD'>PERFOLD</option><option value='PERSA MODERNO'>PERSA MODERNO</option><option value='PERSA CLÁSICO'>PERSA CLÁSICO</option><option value='PETERBALD'>PETERBALD</option><option value='PIXIE BOB'>PIXIE BOB</option><option value='RAGDOLL'>RAGDOLL</option><option value='SAGRADO DE BIRMANIA'>SAGRADO DE BIRMANIA</option><option value='SCOTTISH FOLD'>SCOTTISH FOLD</option><option value='SELKIRK REX'>SELKIRK REX</option><option value='SERENGETI'>SERENGETI</option><option value='SEYCHELLOIS'>SEYCHELLOIS</option><option value='SIAMÉS'>SIAMÉS</option><option value='SIAMÉS MODERNO'>SIAMÉS MODERNO</option><option value='SIAMÉS TRADICIONAL'>SIAMÉS TRADICIONAL</option><option value='SIBERIANO'>SIBERIANO</option><option value='SNOWSHOE'>SNOWSHOE</option><option value='SPHYNX'>SPHYNX</option><option value='TONKINÉS'>TONKINÉS</option><option value='VAN TURCO'>VAN TURCO</option>");
        }

    });
</script>
</html>