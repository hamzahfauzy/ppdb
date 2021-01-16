<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>public/bootstrap/dist/css/bootstrap.min.css">
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
                <h2 class="fs-title">Pendaftaran Telah Berhasil</h2>
                <h3 class="fs-subtitle">NIK dengan nomor <?=$siswa->NIK?> berhasil melakukan pendaftaran.</h3>

                <a href="<?=base_url('daftar/index')?>" class="previous action-button-previous">Kembali</a>
                <a href="<?=base_url('daftar/selesai/'.$id)?>" target="_blank" class="submit action-button">Cetak Bukti Pendaftaran</a>
              </center>
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