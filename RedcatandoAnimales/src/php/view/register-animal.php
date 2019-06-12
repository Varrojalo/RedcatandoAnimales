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
                    <div class="form-group col-md-6">
                        <label for="listaEspecies">Especie:</label>
                        <select id="listaEspecies" name="listaEspecies" class="form-control">
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="listaRazas">Raza: </label>
                        <select name="listaRazas" id="listaRazas" class="form-control">
                            <option value="AFFENPINSCHER">AFFENPINSCHER</option>
                            <option value="AKITA_AMERICANO">AKITA AMERICANO</option>
                            <option value="AKITA_INU">AKITA INU</option>
                            <option value="AMERICAN_BULLY">AMERICAN BULLY</option>
                            <option value="AMSTAFF">AMSTAFF</option>
                            <option value="BASSET_HOUND">BASSET HOUND</option>
                            <option value="BEAGLE">BEAGLE</option>
                            <option value="BICHÓN_FRISÉ">BICHÓN FRISÉ</option>
                            <option value="BICHÓN_HABANERO">BICHÓN HABANERO</option>
                            <option value="BICHÓN_MALTÉS">BICHÓN MALTÉS</option>
                            <option value="BOBTAIL">BOBTAIL</option>
                            <option value="BOERBOEL">BOERBOEL</option>
                            <option value="BORDER_COLLIE">BORDER COLLIE</option>
                            <option value="BOSTON_TERRIER">BOSTON TERRIER</option>
                            <option value="BÓXER">BÓXER</option>
                            <option value="BOYERO_DE_BERNA">BOYERO DE BERNA</option>
                            <option value="BULL_DOG_FRANCÉS">BULL DOG FRANCÉS</option>
                            <option value="BULL_DOG_INGLÉS">BULL DOG INGLÉS</option>
                            <option value="BULL_TERRIER_MINIATURA">BULL TERRIER MINIATURA</option>
                            <option value="BULLMASTIFF">BULLMASTIFF</option>
                            <option value="CAIRN_TERRIER">CAIRN TERRIER</option>
                            <option value="CANE_CORSO">CANE CORSO</option>
                            <option value="CANICHE_TOY">CANICHE TOY</option>
                            <option value="CAVALIER_KING_CHARLES_SPANIEL">CAVALIER KING CHARLES SPANIEL</option>
                            <option value="CHIHUAHUA">CHIHUAHUA</option>
                            <option value="CIRNECO_DEL_ETNA">CIRNECO DEL ETNA</option>
                            <option value="COCKER_SPANIEL">COCKER SPANIEL</option>
                            <option value="CRESTADO_CHINO">CRESTADO CHINO</option>
                            <option value="DÁLMATA">DÁLMATA</option>
                            <option value="DOBERMAN">DOBERMAN</option>
                            <option value="DOGO_ARGENTINO">DOGO ARGENTINO</option>
                            <option value="DOGO_DE_BURDEOS">DOGO DE BURDEOS</option>
                            <option value="FILA_BRASILEIRO">FILA BRASILEIRO</option>
                            <option value="GALGO_ESPAÑOL">GALGO ESPAÑOL</option>
                            <option value="GALGO_ITALIANO">GALGO ITALIANO</option>
                            <option value="GOLDEN_RETRIEVER">GOLDEN RETRIEVER</option>
                            <option value="GRAN_DANÉS">GRAN DANÉS</option>
                            <option value="HUSKY_SIBERIANO">HUSKY SIBERIANO</option>
                            <option value="JACK_RUSSELL_TERRIER">JACK RUSSELL TERRIER</option>
                            <option value="KANGAL_TURCO">KANGAL TURCO</option>
                            <option value="KOMONDOR">KOMONDOR</option>
                            <option value="LABRADOR_NEGRO">LABRADOR NEGRO</option>
                            <option value="LHASA_APSO">LHASA APSO</option>
                            <option value="LOBERO_IRLANDÉS">LOBERO IRLANDÉS</option>
                            <option value="MASTÍN_INGLÉS">MASTÍN INGLÉS</option>
                            <option value="MASTÍN_TIBETANO">MASTÍN TIBETANO</option>
                            <option value="PACHÓN_NAVARRO">PACHÓN NAVARRO</option>
                            <option value="PAPILLÓN">PAPILLÓN</option>
                            <option value="PASTOR_ALEMÁN">PASTOR ALEMÁN</option>
                            <option value="PASTOR_ALEMÁN_BLANCO">PASTOR ALEMÁN BLANCO</option>
                            <option value="PASTOR_AUSTRALIANO_MINIATURA">PASTOR AUSTRALIANO MINIATURA</option>
                            <option value="PASTOR_BELGA">PASTOR BELGA</option>
                            <option value="PASTOR_BELGA_MALINOIS">PASTOR BELGA MALINOIS</option>
                            <option value="PASTOR_CAUCÁSICO">PASTOR CAUCÁSICO</option>
                            <option value="PASTOR_OVEJERO_AUSTRALIANO">PASTOR OVEJERO AUSTRALIANO</option>
                            <option value="PEKINÉS">PEKINÉS</option>
                            <option value="PEQUEÑO_BRABANTINO">PEQUEÑO BRABANTINO</option>
                            <option value="PERRO_AGUAS_ESPAÑOL">PERRO AGUAS ESPAÑOL</option>
                            <option value="PERRO_CORGI">PERRO CORGI</option>
                            <option value="PERRO_DE_AGUA_PORTUGUÉS">PERRO DE AGUA PORTUGUÉS</option>
                            <option value="PERRO_DE_SAN_HUBERTO">PERRO DE SAN HUBERTO</option>
                            <option value="PERRO_LOBO_CHECOSLOVACO">PERRO LOBO CHECOSLOVACO</option>
                            <option value="PERRO_LOBO_HERREÑO">PERRO LOBO HERREÑO</option>
                            <option value="PERRO_PINSCHER">PERRO PINSCHER</option>
                            <option value="PERROS_PITBULL_AMERICANOS">PERROS PITBULL AMERICANOS</option>
                            <option value="PERROS_SCHNAUZER">PERROS SCHNAUZER</option>
                            <option value="PERROS_SHITZU_O_SHIH_TZU">PERROS SHITZU O SHIH TZU</option>
                            <option value="POMERANIA">POMERANIA</option>
                            <option value="PRESA_CANARIO">PRESA CANARIO</option>
                            <option value="PUG_CARLINO">PUG CARLINO</option>
                            <option value="QUILTRO">QUILTRO</option>
                            <option value="ROTTWEILER">ROTTWEILER</option>
                            <option value="SAN_BERNARDO">SAN BERNARDO</option>
                            <option value="SHAR_PEI">SHAR PEI</option>
                            <option value="SHIBA_INU">SHIBA INU</option>
                            <option value="STAFFORDSHIRE_BULL_TERRIER">STAFFORDSHIRE BULL TERRIER</option>
                            <option value="TECKEL_DE_PELO_LARGO">TECKEL DE PELO LARGO</option>
                            <option value="TERRANOVA">TERRANOVA</option>
                            <option value="TIGRE_ANDINO_DE_DOS_NARICES">TIGRE ANDINO DE DOS NARICES</option>
                            <option value="TOSA_INU">TOSA INU</option>
                            <option value="WESTIE">WESTIE</option>
                            <option value="WHIPPET">WHIPPET</option>
                            <option value="XOLOITZCUINTLE">XOLOITZCUINTLE</option>
                            <option value="YORKSHIRE_TERRIER">YORKSHIRE TERRIER</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Edad: </label>
                        <input type="number" name="edad" class="form-control" min="1" max="30" value="10">
                    </div>
                    <div class="form-group col-md-2">
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
                    <div class="form-group col-md-6">
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
                    <button class="btn btn-primary">REGISTRAR</button>
                    <a href="history-animal.php" class="btn btn-link">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>