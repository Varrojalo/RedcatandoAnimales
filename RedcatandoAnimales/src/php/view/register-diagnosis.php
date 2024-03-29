<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Diagnostico | Redcatando Animales</title>

    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/main.css">
    <link rel="stylesheet" href="/RedcatandoAnimales/RedcatandoAnimales/src/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="/RedcatandoAnimales/RedcatandoAnimales/res/imgs/favicon.png" type="image/x-icon">
</head>
<body class="bg-primary">
<?php
    include_once '../model/dao/AnimalDao.php';
    include_once '../model/dao/DiagnosticoDao.php';
    include_once '../model/dao/OrganizacionDao.php';
    include_once '../model/dao/EvidenciaDao.php';

    $codigo = $_GET["cod"];
    $codigoOrganizacion = $_GET["codOrg"];
    $aDao = new AnimalDao();
    $diagDao = new DiagnosticoDao();
    $oDao = new OrganizacionDao();
    $iDao = new EvidenciaDao();
    $animal = $aDao->buscarAnimal($codigo);
    $organizacion = $oDao->buscarOrganizacionID($codigoOrganizacion);
    $imagenes = $iDao->buscarEvidenciasAnimal($codigo);
    ?>
    <div class="container container-fluid">
        <div class="my-3 shadow p-3 bg-white rounded">
            <div class="row">
                <div class="col-md-12">
                    <h2>Registrar Diagnóstico</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dropdown-divider"></div>
                </div>
            </div>
                <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="animal">ANIMAL: <span><?php echo $animal->getNombre();?></span></label>
                            <input type="text" name="animal" id="animal" class="d-none form-control-plaintext" value="<?php echo $animal->getID();?>">
                        </div>
                        <div class="form-group">
                            <label for="organizacion">ORGANIZACIÓN: <span><?php echo $organizacion->getNombre();?></span></label>
                            <input type="text" name="organizacion" id="organizacion" class="d-none form-control-plaintext" value="<?php echo $organizacion->getID(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nombre">NOMBRE:</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del Diagnóstico" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">DESCRIPCIÓN:</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese la descripción" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Evidencias</h3>
                        <div class="dropdown-divider"></div>
                        <div class="form-inline">
                            <button type="button" class="btn btn-primary rounded-circle btn-lg" data-toggle="modal" data-target="#modalCam"><i class="fas fa-camera fa-2 text-white"></i></button>                            
                            <div class="input-group ml-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Escoger Archivo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descEvidencia">DESCRIPCIÓN: </label>
                            <textarea name="descEvidencia" id="descEvidencia" class="form-control" cols="30" rows="5" placeholder="Ingrese descripción"></textarea>
                        </div>
                        <div class="form-group">
                        
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                    foreach ($imagenes as $i) {
                                        echo "<div class='carousel-item active'>";
                                        echo "<img src="."/RedcatandoAnimales/RedcatandoAnimales".$i->getURL()." class='d-block w-100' alt='".$i->getDescripcion()."'>";
                                        echo "</div>";
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">AGREGAR</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">REGISTRAR</button>
                            <a href="history-animal.php" class="btn btn-link">CANCELAR</a>
                        </div>
                    </div>
                </div>            
                </form>
            </div>
            <!-- Modal Camara -->
            <div class="modal fade" id="modalCam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Cámara</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <video id="player" controls autoplay></video>
                        <canvas class="bg-dark" id="snapshot" width=320 height=240></canvas>
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
                        <div class="modal-footer">
                            <button class="btn btn-danger btn-block" type="button" id="capture">CAPTURAR FOTO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
var onFailSoHard = function(e) {
    console.log('Conexion Rechazada!', e);
  };
function hasGetUserMedia() {
  // Note: Opera builds are unprefixed.
  return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia || navigator.msGetUserMedia);
}

if (hasGetUserMedia()) {
    // Good to go!
    var video = document.querySelector('video');
    var canvas = document.querySelector('canvas');
    var ctx = canvas.getContext('2d');
    var localMediaStream = null;

function snapshot() {
  if (localMediaStream) {
    ctx.drawImage(video, 0, 0);
    // "image/webp" works in Chrome 18. In other browsers, this will fall back to image/png.
    document.querySelector('img').src = canvas.toDataURL('image/webp');
  }
}

video.addEventListener('click', snapshot, false);

// Not showing vendor prefixes or code that works cross-browser.
navigator.getUserMedia({video: true}, function(stream) {
  video.src = window.URL.createObjectURL(stream);
  localMediaStream = stream;
}, onFailSoHard);
} else {
  alert('getUserMedia() is not supported in your browser');
}


</script>
</html>