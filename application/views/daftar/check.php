<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - CEK PENDAFTARAN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>public/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/css/daftar.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="container">
<!-- MultiStep Form -->
<div class="row">
    <div id="msform">
        <div class="col-md-12">
            <!-- fieldsets -->
            <fieldset class="active">
              <center>
                <h2 class="fs-title">Cek Pendaftaran</h2>
              </center>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Input Kode Pendaftaran</a></li>
                <li><a data-toggle="tab" href="#menu1">Scan QR Code</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h3>Input Kode Pendaftaran</h3>
                  <form method="post" action="<?=base_url('daftar/checkpendaftaran')?>" name="formcheck">
                    <input type="text" name="kode" class="form-control">
                    <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Scan QR Code</h3>
                  <div id="loadingMessage">🎥 Unable to access video stream (please make sure you have a webcam enabled)</div>
                  <canvas id="canvas" hidden></canvas>
                  <div id="output" hidden>
                    <div id="outputMessage">No QR code detected.</div>
                    <div hidden><b>Data:</b> <span id="outputData"></span></div>
                  </div>
                </div>
              </div>
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
</div>
<script src="<?=base_url('public/js/jsQR.js')?>"></script>
<script>
var video = document.createElement("video");
var canvasElement = document.getElementById("canvas");
var canvas = canvasElement.getContext("2d");
var loadingMessage = document.getElementById("loadingMessage");
var outputContainer = document.getElementById("output");
var outputMessage = document.getElementById("outputMessage");
var outputData = document.getElementById("outputData");
var animation;
var qr_code = "";

function drawLine(begin, end, color) {
  canvas.beginPath();
  canvas.moveTo(begin.x, begin.y);
  canvas.lineTo(end.x, end.y);
  canvas.lineWidth = 4;
  canvas.strokeStyle = color;
  canvas.stroke();
}

// Use facingMode: environment to attemt to get the front camera on phones
navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } }).then(function(stream) {
  video.srcObject = stream;
  video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
  video.play();
  requestAnimationFrame(tick);
});

function tick() {
  loadingMessage.innerText = "⌛ Loading video..."
  if (video.readyState === video.HAVE_ENOUGH_DATA) {
    loadingMessage.hidden = true;
    canvasElement.hidden = false;
    outputContainer.hidden = false;

    canvasElement.height = video.videoHeight;
    canvasElement.width = video.videoWidth;
    canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
    var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
    var code = jsQR(imageData.data, imageData.width, imageData.height, {
      inversionAttempts: "dontInvert",
    });
    if (code && qr_code == "") {
      qr_code = code.data
      drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF3B58");
      drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF3B58");
      drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF3B58");
      drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF3B58");
      outputMessage.hidden = true;
      outputData.parentElement.hidden = false;
      outputData.innerText = code.data;
      submitform(qr_code)
    } else {
      outputMessage.hidden = false;
      outputData.parentElement.hidden = true;
    }
  }
  requestAnimationFrame(tick);
}
function submitform(kode)
{
  kode.value = kode
  formcheck.submit()
}
</script>
<!-- jQuery 3 -->
</body>
</html>