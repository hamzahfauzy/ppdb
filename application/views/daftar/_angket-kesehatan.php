<center>
  <h2 class="fs-title">Angket Kesetahan</h2>
  <h3 class="fs-subtitle">Isi Angket Kesehatan disini</h3>
</center>
<form method="post" action="<?=base_url('daftar/index/5')?>">
<div class="row equal">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Berat Badan (Kg) <small>*</small></label>
      <input type="number" min="1" name="kesehatan[weight]" placeholder="Berat Badan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['kesehatan']['weight'])?$_SESSION['daftar']['kesehatan']['weight']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tinggi Badan (cm) <small>*</small></label>
      <input type="number" min="1" name="kesehatan[hight]" placeholder="Tinggi Badan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['kesehatan']['hight'])?$_SESSION['daftar']['kesehatan']['hight']:''?>"/>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Golongan Darah <small>*</small></label>
      <select class="form-control" name="kesehatan[blood_type]" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['A','B','O','AB'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['kesehatan']['blood_type'])&&$_SESSION['daftar']['kesehatan']['blood_type']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Status Imunisasi <small>*</small></label>
      <select class="form-control imudity_select" name="imudity_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['BCG','Campak','DPT 1,2,3','Hepatitis 1,2,3'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['imudity_status'])&&$_SESSION['daftar']['imudity_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
        <option value="Lainnya" <?=isset($_SESSION['daftar']['imudity_status'])&&$_SESSION['daftar']['imudity_status']=='Lainnya'?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="kesehatan[imudity]" placeholder="Imunisasi Lainnya" class="form-control" value="<?=@$_SESSION['daftar']['kesehatan']['imudity']?>" <?=isset($_SESSION['daftar']['imudity_status'])&&$_SESSION['daftar']['imudity_status']=='Lainnya'?'':'style="display: none"'?>>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Mengalami Gangguan Mata <small>*</small></label>
      <select class="form-control health_select" name="eye_problem_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['YA','TIDAK'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['eye_problem_status'])&&$_SESSION['daftar']['eye_problem_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
      <textarea name="[eye_problem_description]" placeholder="Deskripsi Gangguan Mata" class="form-control" <?=isset($_SESSION['daftar']['eye_problem_status'])&&$_SESSION['daftar']['eye_problem_status']=='YA'?'':'style="display: none"'?>><?=@$_SESSION['daftar']['kesehatan']['eye_problem_description']?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Mengalami Gangguan THT <small>*</small></label>
      <select class="form-control health_select" name="tht_problem_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['YA','TIDAK'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['tht_problem_status'])&&$_SESSION['daftar']['tht_problem_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
      <textarea name="kesehatan[tht_problem_description]" placeholder="Deskripsi Gangguan THT" class="form-control" <?=isset($_SESSION['daftar']['tht_problem_status'])&&$_SESSION['daftar']['tht_problem_status']=='YA'?'':'style="display: none"'?>><?=@$_SESSION['daftar']['kesehatan']['tht_problem_description']?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Memiliki Alergi <small>*</small></label>
      <select class="form-control health_select" name="alergi_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['YA','TIDAK'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['alergi_status'])&&$_SESSION['daftar']['alergi_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
      <textarea name="kesehatan[alergi_description]" placeholder="Penyebab Alergi" class="form-control" <?=isset($_SESSION['daftar']['alergi_status'])&&$_SESSION['daftar']['alergi_status']=='YA'?'':'style="display: none"'?>><?=@$_SESSION['daftar']['kesehatan']['alergi_description']?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Perawatan di Rumah Sakit <small>*</small></label>
      <select class="form-control health_select" name="opname_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['YA','TIDAK'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['opname_status'])&&$_SESSION['daftar']['opname_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
      <textarea name="kesehatan[opname_description]" placeholder="Nama Rumah Sakit, Penyebab dirawat, tanggal dirawat, catatan lainnya" class="form-control" <?=isset($_SESSION['daftar']['opname_status'])&&$_SESSION['daftar']['opname_status']=='YA'?'':'style="display: none"'?>><?=@$_SESSION['daftar']['kesehatan']['opname_description']?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Pernah Pergi ke Dokter <small>*</small></label>
      <select class="form-control health_select" name="went_to_doctor_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['YA','TIDAK'] as $val): ?>
        <option value="<?=$val?>" <?=isset($_SESSION['daftar']['went_to_doctor_status'])&&$_SESSION['daftar']['went_to_doctor_status']==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
      <textarea name="kesehatan[went_to_doctor_description]" placeholder="Penyebab, Jenis Penyakit, catatan lainnya" class="form-control" <?=isset($_SESSION['daftar']['went_to_doctor_status'])&&$_SESSION['daftar']['went_to_doctor_status']=='YA'?'':'style="display: none"'?> ><?=@$_SESSION['daftar']['kesehatan']['went_to_doctor_description']?></textarea>
    </div>
  </div>
</div>
<center>
  <a href="<?=base_url('daftar/index/3')?>" class="previous action-button-previous">Kembali</a>
  <button class="next action-button">Selanjutnya</button>
</center>
</form>