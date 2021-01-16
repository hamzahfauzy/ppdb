<center>
  <h2 class="fs-title">Ringkasan</h2>
  <h3 class="fs-subtitle">Periksa Ringkasan Pendaftaran Kamu</h3>
</center>
Jenjang Pendidikan : <b><?=$_SESSION['daftar']['data_jenjang']?></b>
<br>
<h2 class="fs-title">Data Pribadi</h2>
<div class="table-responsive">
<table class="table table-bordered">
  <?php foreach($_SESSION['daftar']['data_pribadi'] as $key => $value): ?>
  <tr>
    <td><?=$labels['data_pribadi'][$key]?></td>
    <td>:</td>
    <td><?=$value?></td>
  </tr>
  <?php endforeach ?>
</table>
</div>
<h2 class="fs-title">Data Saudara Kandung</h2>
<div class="table-responsive">
<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>Nama Saudara</td>
    <td>Jenjang Pendidikan</td>
    <td>Nama Sekolah</td>
    <td>Kelas / Jurusan</td>
  </tr>
  <?php if(isset($_SESSION['daftar']['data_saudara'])): ?>
  <?php foreach($_SESSION['daftar']['data_saudara']['name'] as $key => $value): ?>
  <tr>
    <td><?=$key+1?></td>
    <td><?=$_SESSION['daftar']['data_saudara']['name'][$key]?></td>
    <td><?=$_SESSION['daftar']['data_saudara']['study_stage'][$key]?></td>
    <td><?=$_SESSION['daftar']['data_saudara']['school_name'][$key]?></td>
    <td><?=$_SESSION['daftar']['data_saudara']['majors'][$key]?></td>
  </tr>
  <?php endforeach ?>
  <?php endif ?>
</table>
</div>
<?php foreach(['ayah'=>'Ayah Kandung','ibu'=>'Ibu Kandung','wali'=>'Wali'] as $key => $value): ?>
<?php if($key=='wali'&&$_SESSION['daftar']['data_orang_tua'][$key]['name']=='') continue; ?>
<h2 class="fs-title">Keterangan Tentang <?=$value?></h2>
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <td><b>Nama Lengkap dan gelar</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['name']?></td>
      <td></td>
      <td><b>Agama</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['religion']?></td>
    </tr>
    <tr>
      <td><b>Pendidikan Terakhir</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['last_study']?></td>
      <td></td>
      <td><b>Pekerjaan</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['work']?$_SESSION['daftar']['data_orang_tua'][$key]['work']:'-'?></td>
    </tr>
    <tr>
      <td><b>Nama Instansi</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['work_instance']?$_SESSION['daftar']['data_orang_tua'][$key]['work_instance']:'-'?></td>
      <td></td>
      <td><b>No Telepon Instansi</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['work_instance_phone']?$_SESSION['daftar']['data_orang_tua'][$key]['work_instance_phone']:'-'?></td>
    </tr>
    <tr>
      <td><b>Alamat</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['work_address']?$_SESSION['daftar']['data_orang_tua'][$key]['work_address']:'-'?></td>
      <td></td>
      <td><b>Jabatan</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['position']?$_SESSION['daftar']['data_orang_tua'][$key]['position']:'-'?></td>
    </tr>
    <tr>
      <td><b>Penghasilan Perbulan</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['income']?></td>
      <td></td>
      <td><b>Telepon Rumah / HP</b></td>
      <td><?=$_SESSION['daftar']['data_orang_tua'][$key]['phone']?$_SESSION['daftar']['data_orang_tua'][$key]['phone']:'-'?></td>
    </tr>
  </table>
</div>
<?php endforeach ?>
<h2 class="fs-title">Prestasi Akademik</h2>
<div class="table-responsive">
<table class="table table-bordered">
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
    <?php if(isset($_SESSION['daftar']['prestasi']['akademik'])): ?>
    <?php foreach($_SESSION['daftar']['prestasi']['akademik']['name'] as $key => $value): ?>
    <tr>
      <td><?=$key+1?></td>
      <td><?=$_SESSION['daftar']['prestasi']['akademik']['name'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['akademik']['position'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['akademik']['level'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['akademik']['organizer'][$key]?></td>
    </tr>
    <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>
</div>
<h2 class="fs-title">Prestasi Non-Akademik</h2>
<div class="table-responsive">
<table class="table table-bordered">
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
    <?php if(isset($_SESSION['daftar']['prestasi']['non-akademik'])): ?>
    <?php foreach($_SESSION['daftar']['prestasi']['non-akademik']['name'] as $key => $value): ?>
    <tr>
      <td><?=$key+1?></td>
      <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['name'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['position'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['level'][$key]?></td>
      <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['organizer'][$key]?></td>
    </tr>
    <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>
</div>
<h2 class="fs-title">Riwayat Kesehatan</h2>
<div class="table-responsive">
<table class="table table-bordered">
  <?php foreach($_SESSION['daftar']['kesehatan'] as $key => $value): ?>
  <tr>
    <td width="200"><?=$labels['kesehatan'][$key]?></td>
    <td width="20">:</td>
    <td><?=$value?></td>
  </tr>
  <?php endforeach ?>
</table>
</div>
  <div class="alert alert-warning">
    Jika data sudah benar, silahkan upload berkas berikut untuk menyelesaikan pendaftaran
  </div>
  <form method="post" action="<?=base_url('daftar/index/6')?>" enctype="multipart/form-data">
    <?php $types = $_SESSION['daftar']['data_jenjang']=='MI'?['KK','AKTA','IJAZAH TERAKHIR','PAS FOTO']:['KK','AKTA','KARTU SEHAT','PAS FOTO']; ?>
    <?php foreach($types as $file_type): ?>
      <div class="form-group">
        <label><?=$file_type?></label>
        <input type="file" required="" name="<?=$file_type?>" class="form-control" style="height: auto;">
      </div>
    <?php endforeach ?>
    <center>
      <a href="<?=base_url('daftar/index/4')?>" class="previous action-button-previous">Kembali</a>
      <input type="submit" name="submit" class="submit action-button" value="Selesaikan Pendaftaran"/>
    </center>
  </form>