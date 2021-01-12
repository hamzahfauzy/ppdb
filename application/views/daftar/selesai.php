<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container-fluid">
  <center>
    <br>
    <div id="qrcode">
      <img src="<?=$qrcode?>" width="150px">
    </div>
    <h2 class="fs-title">Ringkasan Pendaftaran</h2>
  </center>
  No Pendaftaran : <b><?=$siswa->register_number?></b>
  <br>
  <h2 class="fs-title">Data Pribadi</h2>
  <table border="1" cellpadding="5" cellspacing="0" width="100%">
    <?php 
    foreach($siswa as $key => $value): 
      if(!isset($labels['data_pribadi'][$key])) continue;
    ?>
    <tr>
      <td><?=$labels['data_pribadi'][$key]?></td>
      <td>:</td>
      <td><?=$value?></td>
    </tr>
    <?php endforeach ?>
  </table>
  <h2 class="fs-title">Data Saudara Kandung</h2>
  <table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
      <td>No</td>
      <td>Nama Saudara</td>
      <td>Jenjang Pendidikan</td>
      <td>Nama Sekolah</td>
      <td>Kelas / Jurusan</td>
    </tr>
    <?php if(empty($saudara)): ?>
    <tr>
      <td colspan="5"><i>Tidak ada data</i></td>
    </tr>
    <?php endif ?>
    <?php foreach($saudara as $key => $value): ?>
    <tr>
      <td><?=$key+1?></td>
      <td><?=$value->name?></td>
      <td><?=$value->study_stage?></td>
      <td><?=$value->school_name?></td>
      <td><?=$value->majors?></td>
    </tr>
    <?php endforeach ?>
  </table>
  <?php foreach($orangtua as $key => $value): ?>
  <h2 class="fs-title">Keterangan Tentang <?=$value->parent_type?></h2>
  <div class="row equal">
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Lengkap dan gelar</label><br>
        <?=$value->name?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Agama</label><br>
        <?=$value->religion?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pendidikan Terakhir</label><br>
        <?=$value->last_study?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pekerjaan</label><br>
        <?=$value->work?$value->work:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Instansi</label><br>
        <?=$value->work_instance?$value->work_instance:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>No Telepon Instansi</label><br>
        <?=$value->work_instance_phone?$value->work_instance_phone:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Alamat</label><br>
        <?=$value->work_address?$value->work_address:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Jabatan</label><br>
        <?=$value->position?$value->position:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Penghasilan perbulan</label><br>
        <?=$value->income?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Telepon Rumah / HP</label><br>
        <?=$value->phone?$value->phone:'-'?>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Email</label><br>
        <?=$value->email?$value->email:'-'?>
      </div>
    </div>
  </div>
  <?php endforeach ?>
  <h2 class="fs-title">Prestasi Akademik</h2>
  <table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
    <tr>
      <td>No</td>
      <td>Nama Kejuaran/Prestasi</td>
      <td>Juara</td>
      <td>Tingkat</td>
      <td>Penyelenggara</td>
    </tr>
    </thead>
    <tbody>
      <?php foreach($prestasi_akademis as $key => $prestasi): ?>
      <tr>
        <td><?=$key+1?></td>
        <td><?=$prestasi->name?></td>
        <td><?=$prestasi->position?></td>
        <td><?=$prestasi->level?></td>
        <td><?=$prestasi->organizer?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <h2 class="fs-title">Prestasi Non-Akademik</h2>
  <table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
    <tr>
      <td>No</td>
      <td>Nama Kejuaran/Prestasi</td>
      <td>Juara</td>
      <td>Tingkat</td>
      <td>Penyelenggara</td>
    </tr>
    </thead>
    <tbody>
      <?php foreach($prestasi_non_akademis as $key => $prestasi): ?>
      <tr>
        <td><?=$key+1?></td>
        <td><?=$prestasi->name?></td>
        <td><?=$prestasi->position?></td>
        <td><?=$prestasi->level?></td>
        <td><?=$prestasi->organizer?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <h2 class="fs-title">Riwayat Kesehatan</h2>
  <table border="1" cellpadding="5" cellspacing="0" width="100%">
    <?php 
    foreach($kesehatan as $key => $value): 
      if(!isset($labels['kesehatan'][$key])) continue;
      ?>
    <tr>
      <td width="200"><?=$labels['kesehatan'][$key]?></td>
      <td width="20">:</td>
      <td><?=$value?></td>
    </tr>
    <?php endforeach ?>
  </table>
</div>
<!-- /.MultiStep Form -->
</div>
<!-- jQuery 3 -->
<script src="<?=base_url()?>public/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>public/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>