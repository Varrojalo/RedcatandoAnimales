<?php session_start();?>
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
            <div class="row">
                <div class="col-md-12">
                    <h2>Registrar Animal</h2>
                </div>
                <div class="col-md-12">
                    <div class="dropdown-divider"></div>
                </div>
            </div>
            <form action="../controller/procesarIngresoAnimal.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group d-none">
                        <?php
                            echo "<input type='text' value=".$_SESSION["org"]." name='organizacion' class='form-control' readonly>";
                            echo "<input type='text' value=".$_SESSION["usuarioID"]." name='usuario' class='form-control' readonly>";
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="animalURL">Foto:</label>
                        <div class="custom-file">
                            <input type="file" accept=".jpg,.png,.jpeg,.gif" class="custom-file-input" name="animalURL" id="animalURL">
                            <label class="custom-file-label" for="animalURL" aria-describedby="inputGroupFileAddon02">Escoja un archivo o arrastrelo acá.<span id="fotoActual"></span></label>
                            <video id="player" controls autoplay></video>
                            <button id="capture">Capturar</button>
                            <canvas id="snapshot" width=320 height=240></canvas>
                            <script>
                            var player = document.getElementById('player');
                            var snapshotCanvas = document.getElementById('snapshot');
                            var captureButton = document.getElementById('capture');

                            var handleSuccess = function(stream) {
                                // Attach the video stream to the video element and autoplay.
                                player.srcObject = stream;
                            };

                            captureButton.addEventListener('click', function() {
                                var context = snapshot.getContext('2d');
                                // Draw the video frame to the canvas.
                                context.drawImage(player, 0, 0, snapshotCanvas.width, snapshotCanvas.height);
                                var foto = snapshot.toDataURL("image/png");
                                var animalUrl = document.getElementById("animalURL");  
                                animalUrl.src = foto;    
                            });

                            navigator.mediaDevices.getUserMedia({video: true}).then(handleSuccess);
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="chip">N° de CHIP:</label>
                        <input type="number" class="form-control" placeholder="Ingrese el numero de chip" min=0 value=0 name="chip" id="chip">
                    </div>
                    <!--Controles Fecha Nacimiento-->
                    <div class="form-group col-md-3">
                        <label for="fechaNacimiento">Fecha de Nacimiento: </label>
                        <input type="date" name="fechaNacimiento" max="<?php echo date("Y-m-d");?>" class="form-control">
                    </div>
                    <!--Controles Sexo-->
                    <div class="form-group col-md-3">
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
                    <div class="form-group col-md-6">
                        <label for="listaEspecies">Especie:</label>
                        <select id="listaEspecies" name="listaEspecies" class="form-control">
                            <option value="canino">Canino</option>
                            <option value="felino">Felino</option>
                        </select>
                    </div>
                    <!--Controles Raza-->
                    <div class="form-group col-md-3">
                        <label for="listaRazas">Raza: </label>
                        <select name="listaRazas" id="listaRazas" class="form-control">
                            <option value='1'>AFFENPINSCHER</option>
                            <option value='2'>AKITA AMERICANO</option>
                            <option value='3'>AKITA INU</option>
                            <option value='4'>AMERICAN BULLY</option>
                            <option value='5'>AMSTAFF</option>
                            <option value='6'>BASSET HOUND</option>
                            <option value='7'>BEAGLE</option>
                            <option value='8'>BICHÓN FRISÉ</option>
                            <option value='9'>BICHÓN HABANERO</option>
                            <option value='10'>BICHÓN MALTÉS</option>
                            <option value='11'>BOBTAIL</option>
                            <option value='12'>BOERBOEL</option>
                            <option value='13'>BORDER COLLIE</option>
                            <option value='14'>BOSTON TERRIER</option>
                            <option value='15'>BÓXER</option>
                            <option value='16'>BOYERO DE BERNA</option>
                            <option value='17'>BULL DOG FRANCÉS</option>
                            <option value='18'>BULL DOG INGLÉS</option>
                            <option value='19'>BULL TERRIER MINIATURA</option>
                            <option value='20'>BULLMASTIFF</option>
                            <option value='21'>CAIRN TERRIER</option>
                            <option value='22'>CANE CORSO</option>
                            <option value='23'>CANICHE TOY</option>
                            <option value='24'>CAVALIER KING CHARLES SPANIEL</option>
                            <option value='25'>CHIHUAHUA</option>
                            <option value='26'>CIRNECO DEL ETNA</option>
                            <option value='27'>COCKER SPANIEL</option>
                            <option value='28'>CRESTADO CHINO</option>
                            <option value='29'>DÁLMATA</option>
                            <option value='30'>DOBERMAN</option>
                            <option value='31'>DOGO ARGENTINO</option>
                            <option value='32'>DOGO DE BURDEOS</option>
                            <option value='33'>FILA BRASILEIRO</option>
                            <option value='34'>GALGO ESPAÑOL</option>
                            <option value='35'>GALGO ITALIANO</option>
                            <option value='36'>GOLDEN RETRIEVER</option>
                            <option value='37'>GRAN DANÉS</option>
                            <option value='38'>HUSKY SIBERIANO</option>
                            <option value='39'>JACK RUSSELL TERRIER</option>
                            <option value='40'>KANGAL TURCO</option>
                            <option value='41'>KOMONDOR</option>
                            <option value='42'>LABRADOR NEGRO</option>
                            <option value='43'>LHASA APSO</option>
                            <option value='44'>LOBERO IRLANDÉS</option>
                            <option value='45'>MASTÍN INGLÉS</option>
                            <option value='46'>MASTÍN TIBETANO</option>
                            <option value='47'>PACHÓN NAVARRO</option>
                            <option value='48'>PAPILLÓN</option>
                            <option value='49'>PASTOR ALEMÁN</option>
                            <option value='50'>PASTOR ALEMÁN BLANCO</option>
                            <option value='51'>PASTOR AUSTRALIANO MINIATURA</option>
                            <option value='52'>PASTOR BELGA</option>
                            <option value='53'>PASTOR BELGA MALINOIS</option>
                            <option value='54'>PASTOR CAUCÁSICO</option>
                            <option value='55'>PASTOR OVEJERO AUSTRALIANO</option>
                            <option value='56'>PEKINÉS</option>
                            <option value='57'>PEQUEÑO BRABANTINO</option>
                            <option value='58'>PERRO AGUAS ESPAÑOL</option>
                            <option value='59'>PERRO CORGI</option>
                            <option value='60'>PERRO DE AGUA PORTUGUÉS</option>
                            <option value='61'>PERRO DE SAN HUBERTO</option>
                            <option value='62'>PERRO LOBO CHECOSLOVACO</option>
                            <option value='63'>PERRO LOBO HERREÑO</option>
                            <option value='64'>PERRO PINSCHER</option>
                            <option value='65'>PERROS PITBULL AMERICANOS</option>
                            <option value='66'>PERROS SCHNAUZER</option>
                            <option value='67'>PERROS SHITZU O SHIH TZU</option>
                            <option value='68'>POMERANIA</option>
                            <option value='69'>PRESA CANARIO</option>
                            <option value='70'>PUG CARLINO</option>
                            <option value='71'>MESTIZO</option>
                            <option value='72'>ROTTWEILER</option>
                            <option value='73'>SAN BERNARDO</option>
                            <option value='74'>SHAR PEI</option>
                            <option value='75'>SHIBA INU</option>
                            <option value='76'>STAFFORDSHIRE BULL TERRIER</option>
                            <option value='77'>TECKEL DE PELO LARGO</option>
                            <option value='78'>TERRANOVA</option>
                            <option value='79'>TIGRE ANDINO DE DOS NARICES</option>
                            <option value='80'>TOSA INU</option>
                            <option value='81'>WESTIE</option>
                            <option value='82'>WHIPPET</option>
                            <option value='83'>XOLOITZCUINTLE</option>
                            <option value='84'>YORKSHIRE TERRIER</option>
                        </select>
                    </div>
                    <!--Controles Patron-->
                    <div class="form-group col-md-3">
                        <label for="listaPatrones">Patrón: </label>
                        <select name="listaPatrones" id="listaPatrones" class="form-control">
                            <option value="RAYAS">RAYAS/ATIGRADO</option>
                            <option value="MANCHAS">MANCHAS/PARCHES</option>
                            <option value="PUNTAS DE OTRO COLOR">PUNTAS DE OTRO COLOR</option>
                            <option value="BANDAS O FRANJAS">BANDAS O FRANJAS</option>
                            <option value="JASPEADO">JASPEADO</option>
                            <option value="LEONADO">SOMBREADO/LEONADO</option>
                            <option value="NINGUNO">NINGUNO</option>
                            <option value="NO SE SEÑALA">NO SE SEÑALA</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Observacion: </label>
                    <textarea name="observacion" id="" cols="30" rows="9" class="form-control"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="dropdown-divider"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" name="btnAgregarAnimal" class="btn btn-primary">REGISTRAR</button>
                        <?php
                            echo "<a href='history-animal.php' class='btn btn-link'>CANCELAR</a>";
                        ?> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $("#fotoActual").val("");
    $("#listaEspecies").on("change",function () { 
        //alert( "Valor a cambiado a: "+$("#listaEspecies").val() );
        let especie = $("#listaEspecies").val();

        if(especie == "canino")
        {
            $("#listaRazas").empty();
            $("#listaRazas").append("<option value='1'>AFFENPINSCHER</option><option value='2'>AKITA AMERICANO</option><option value='3'>AKITA INU</option><option value='4'>AMERICAN BULLY</option><option value='5'>AMSTAFF</option><option value='6'>BASSET HOUND</option><option value='7'>BEAGLE</option><option value='8'>BICHÓN FRISÉ</option><option value='9'>BICHÓN HABANERO</option><option value='10'>BICHÓN MALTÉS</option><option value='11'>BOBTAIL</option><option value='12'>BOERBOEL</option><option value='13'>BORDER COLLIE</option><option value='14'>BOSTON TERRIER</option><option value='15'>BÓXER</option><option value='16'>BOYERO DE BERNA</option><option value='17'>BULL DOG FRANCÉS</option><option value='18'>BULL DOG INGLÉS</option><option value='19'>BULL TERRIER MINIATURA</option><option value='20'>BULLMASTIFF</option><option value='21'>CAIRN TERRIER</option><option value='22'>CANE CORSO</option><option value='23'>CANICHE TOY</option><option value='24'>CAVALIER KING CHARLES SPANIEL</option><option value='25'>CHIHUAHUA</option><option value='26'>CIRNECO DEL ETNA</option><option value='27'>COCKER SPANIEL</option><option value='28'>CRESTADO CHINO</option><option value='29'>DÁLMATA</option><option value='30'>DOBERMAN</option><option value='31'>DOGO ARGENTINO</option><option value='32'>DOGO DE BURDEOS</option><option value='33'>FILA BRASILEIRO</option><option value='34'>GALGO ESPAÑOL</option><option value='35'>GALGO ITALIANO</option><option value='36'>GOLDEN RETRIEVER</option><option value='37'>GRAN DANÉS</option><option value='38'>HUSKY SIBERIANO</option><option value='39'>JACK RUSSELL TERRIER</option><option value='40'>KANGAL TURCO</option><option value='41'>KOMONDOR</option><option value='42'>LABRADOR NEGRO</option><option value='43'>LHASA APSO</option><option value='44'>LOBERO IRLANDÉS</option><option value='45'>MASTÍN INGLÉS</option><option value='46'>MASTÍN TIBETANO</option><option value='47'>PACHÓN NAVARRO</option><option value='48'>PAPILLÓN</option><option value='49'>PASTOR ALEMÁN</option><option value='50'>PASTOR ALEMÁN BLANCO</option><option value='51'>PASTOR AUSTRALIANO MINIATURA</option><option value='52'>PASTOR BELGA</option><option value='53'>PASTOR BELGA MALINOIS</option><option value='54'>PASTOR CAUCÁSICO</option><option value='55'>PASTOR OVEJERO AUSTRALIANO</option><option value='56'>PEKINÉS</option><option value='57'>PEQUEÑO BRABANTINO</option><option value='58'>PERRO AGUAS ESPAÑOL</option><option value='59'>PERRO CORGI</option><option value='60'>PERRO DE AGUA PORTUGUÉS</option><option value='61'>PERRO DE SAN HUBERTO</option><option value='62'>PERRO LOBO CHECOSLOVACO</option><option value='63'>PERRO LOBO HERREÑO</option><option value='64'>PERRO PINSCHER</option><option value='65'>PERROS PITBULL AMERICANOS</option><option value='66'>PERROS SCHNAUZER</option><option value='67'>PERROS SHITZU O SHIH TZU</option><option value='68'>POMERANIA</option><option value='69'>PRESA CANARIO</option><option value='70'>PUG CARLINO</option><option value='71'>MESTIZO</option><option value='72'>ROTTWEILER</option><option value='73'>SAN BERNARDO</option><option value='74'>SHAR PEI</option><option value='75'>SHIBA INU</option><option value='76'>STAFFORDSHIRE BULL TERRIER</option><option value='77'>TECKEL DE PELO LARGO</option><option value='78'>TERRANOVA</option><option value='79'>TIGRE ANDINO DE DOS NARICES</option><option value='80'>TOSA INU</option><option value='81'>WESTIE</option><option value='82'>WHIPPET</option><option value='83'>XOLOITZCUINTLE</option><option value='84'>YORKSHIRE TERRIER</option>");
        }
        else
        {
            $("#listaRazas").empty();
            $("#listaRazas").append("<option value='85'>ABISINIO</option><option value='86'>AMERICAN CURL</option><option value='87'>AZUL RUSO</option><option value='88'>AMERICAN SHORTHAIR</option><option value='89'>AMERICAN WIREHAIR</option><option value='90'>ANGORA TURCO</option><option value='91'>AFRICANO DOMÉSTICO</option><option value='92'>BENGALA</option><option value='93'>BOBTAIL JAPONÉS</option><option value='94'>BOMBAY</option><option value='95'>BOSQUE DE NORUEGA</option><option value='96'>BRAZILIAN SHORTHAIR</option><option value='97'>BRIVON DE PELO CORTO</option><option value='98'>BRIVON DE PELO LARGO</option><option value='99'>BRITISH SHORTHAIR</option><option value='100'>BURMÉS</option><option value='101'>BURMILLA</option><option value='102'>CORNISH REX</option><option value='103'>CALIFORNIA SPANGLED</option><option value='104'>CEYLON</option><option value='105'>CYMRIC</option><option value='106'>CHARTREUX</option><option value='107'>DEUTSCH LANGHAAR</option><option value='108'>DEVON REX</option><option value='109'>DORADO AFRICANO</option><option value='110'>DON SPHYNX</option><option value='111'>DRAGON LI</option><option value='112'>EUROPEO COMÚN</option><option value='113'>EXÓTICO DE PELO CORTO</option><option value='114'>GATO EUROPEO BICOLOR</option><option value='115'>FOLDEX</option><option value='116'>GERMAN REX</option><option value='117'>HABANA BROWN</option><option value='118'>HIMALAYO</option><option value='119'>KORAT</option><option value='120'>KHAO MANEE</option><option value='121'>MAINE COON</option><option value='122'>MANX</option><option value='123'>MAU EGIPCIO</option><option value='124'>MUNCHKIN</option><option value='125'>OCICAT</option><option value='126'>ORIENTAL</option><option value='127'>ORIENTAL DE PELO LARGO</option><option value='128'>PERFOLD</option><option value='129'>PERSA MODERNO</option><option value='130'>PERSA CLÁSICO</option><option value='131'>PETERBALD</option><option value='132'>PIXIE BOB</option><option value='133'>RAGDOLL</option><option value='134'>SAGRADO DE BIRMANIA</option><option value='135'>SCOTTISH FOLD</option><option value='136'>SELKIRK REX</option><option value='137'>SERENGETI</option><option value='138'>SEYCHELLOIS</option><option value='139'>SIAMÉS</option><option value='140'>SIAMÉS MODERNO</option><option value='141'>SIAMÉS TRADICIONAL</option><option value='142'>SIBERIANO</option><option value='143'>SNOWSHOE</option><option value='144'>SPHYNX</option><option value='145'>TONKINÉS</option><option value='146'>VAN TURCO</option>");
        }

    });
    $("#animalURL").on("change", function (e) {
        let urlValor = e.target.files[0].name;
        //let urlValor = $("#animalURL").val();
        $("#fotoActual").html(" ("+urlValor+")");
    });
    //Escoja un archivo o arrastrelo acá.
</script>
</html>