<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Calon Siswa</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/siswa')?>">Data Calon Siswa</a></li>
        <li class="active">Detail Calon Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-header">
          <?php if($siswa->status == 'Daftar'): ?>
          <a href="<?=base_url('admin/siswa/verifikasi/'.$siswa->id)?>" class="btn btn-success" onclick="if(confirm('Apakah anda yakin memverifikasi calon siswa ini?')){return true}else{return false}">Verifikasi</a>
          <a href="<?=base_url('admin/siswa/tolak/'.$siswa->id)?>" class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menolak calon siswa ini?')){return true}else{return false}">Tolak</a>
          <?php endif ?>

          <?php if($siswa->status == 'Terverifikasi'): ?>
          <a href="<?=base_url('admin/siswa/reregister/'.$siswa->id)?>" class="btn btn-primary" onclick="if(confirm('Apakah anda yakin mengkonfirmasi pendaftaran ulang calon siswa ini?')){return true}else{return false}">Konfirmasi Daftar Ulang</a>
          <?php endif ?>
        </div>
        <div class="box-body">
          <center>
            <br>
            <div id="qrcode">
              <img src="<?=$qrcode?>" width="150px">
            </div>
            <h2 class="fs-title">Ringkasan Pendaftaran</h2>
            <?php if(in_array($siswa->status,['Terverifikasi','Ditolak'])): ?>
            <label class="badge"><?=$siswa->status?> oleh <?=$verifikator->name?></label>
            <?php endif ?>
            <?php if(in_array($siswa->status,['Daftar Ulang'])): ?>
            <label class="label label-success">Daftar Ulang oleh <?=$reregistered->name?></label>
            <?php endif ?>
          </center>
          No Pendaftaran : <b><?=$siswa->register_number?></b>
          <br>
          <h2 class="fs-title">Data Pribadi</h2>
          <table class="table table-bordered">
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
          <table class="table table-bordered">
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
          <table class="table table-bordered">
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
      </div>
    </section>
  </div>