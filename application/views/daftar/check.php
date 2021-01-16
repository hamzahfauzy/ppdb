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
                  <form method="post" action="<?=base_url('daftar/checkpendaftaran')?>">
                    <input type="text" name="kode" class="form-control">
                    <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Scan QR Code</h3>
                </div>
              </div>
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
</div>
<!-- jQuery 3 -->
</body>
</html>