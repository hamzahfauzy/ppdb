<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - Kode Pendaftaran Tidak di Temukan</title>
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
                <h2>Informasi Pendaftaran</h2>
                <br>
              </center>
              <table width="100%">
                <tr>
                  <td width="160px" valign="top">
                    <img src="<?=base_url($pas_foto->file_url)?>" width="150px" height="200px" style="object-fit: cover;object-position: center;">
                  </td>
                  <td valign="top">
                    <table class="table table-bordered">
                      <tr>
                        <td width="250px">No. Pendaftaran</td>
                        <td><b><?=$siswa->register_number?></b></td>
                      </tr>
                      <tr>
                        <td>NIK</td>
                        <td><?=$siswa->NIK?></td>
                      </tr>
                      <tr>
                        <td>Tempat / Tanggal Lahir</td>
                        <td><?=$siswa->birthplace?>, <?=tanggal_indo($siswa->birthdate)?></td>
                      </tr>
                      <tr>
                        <td>Waktu Mendaftar</td>
                        <td><?=tanggal_indo(date('Y-m-d',strtotime($siswa->registered_at))).', '.date('H:i:s',strtotime($siswa->registered_at))?></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td><b><?=$siswa->status?></b></td>
                      </tr>
                      <tr>
                        <td>QR Code</td>
                        <td><img src="<?=$qrcode?>" width="150px" height="200px" style="object-fit: cover;object-position: center;"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <center>
                <a href="<?=base_url('check')?>" class="previous action-button-previous">Kembali</a>
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