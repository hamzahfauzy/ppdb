<form method="post" action="<?=base_url('daftar/index/3')?>">
  <!-- <input type="hidden" name="data_jenjang" value="<?=$_SESSION['daftar']['data_jenjang']?>"> -->
<center>
  <h2 class="fs-title">Data Pribadi</h2>
  <h3 class="fs-subtitle">Data Pribadi kamu disini</h3>
</center>
<div class="row equal">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>NIK <small>*</small></label>
      <input type="text" pattern="[0-9]{16}" maxlength="16" name="data_pribadi[NIK]" placeholder="NIK" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['NIK'])?$_SESSION['daftar']['data_pribadi']['NIK']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama Lengkap <small>*</small></label>
      <input type="text" name="data_pribadi[name]" placeholder="Nama Lengkap" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['name'])?$_SESSION['daftar']['data_pribadi']['name']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama Panggilan <small>*</small></label>
      <input type="text" name="data_pribadi[nickname]" placeholder="Nama Panggilan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['nickname'])?$_SESSION['daftar']['data_pribadi']['nickname']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">  
    <div class="form-group">
      <label>Jenis Kelamin <small>*</small></label>
      <select name="data_pribadi[gender]" class="form-control" required="">
        <option value="">- Pilih Jenis Kelamin -</option>
        <option value="Laki-laki" <?=isset($_SESSION['daftar']['data_pribadi']['gender'])&&$_SESSION['daftar']['data_pribadi']['gender']=='Laki-laki'?'selected=""':''?>">Laki-laki</option>
        <option value="Perempuan" <?=isset($_SESSION['daftar']['data_pribadi']['gender'])&&$_SESSION['daftar']['data_pribadi']['gender']=='Perempuan'?'selected=""':''?>">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tempat Lahir <small>*</small></label>
      <input type="text" name="data_pribadi[birthplace]" placeholder="Tempat Lahir" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birthplace'])?$_SESSION['daftar']['data_pribadi']['birthplace']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tanggal Lahir <small>*</small></label>
      <input type="date" name="data_pribadi[birthdate]" placeholder="Tanggal Lahir" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birthdate'])?$_SESSION['daftar']['data_pribadi']['birthdate']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Agama <small>*</small></label>
      <input type="text" name="data_pribadi[religion]" placeholder="Agama" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['religion'])?$_SESSION['daftar']['data_pribadi']['religion']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="data_pribadi[address]" placeholder="Alamat" required="" class="form-control"><?=isset($_SESSION['daftar']['data_pribadi']['address'])?$_SESSION['daftar']['data_pribadi']['address']:''?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Bahasa Sehari-hari <small>*</small></label>
      <select name="bahasa" class="form-control bahasa" required="">
        <option value="">- Pilih Bahasa -</option>
        <option value="Indonesia" <?=isset($_SESSION['daftar']['bahasa'])&&$_SESSION['daftar']['bahasa']=='Indonesia'?'selected=""':''?>>Indonesia</option>
        <option value="Jawa" <?=isset($_SESSION['daftar']['bahasa'])&&$_SESSION['daftar']['bahasa']=='Jawa'?'selected=""':''?>>Jawa</option>
        <option value="Lainnya" <?=isset($_SESSION['daftar']['bahasa'])&&$_SESSION['daftar']['bahasa']=='Lainnya'?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="data_pribadi[language]" placeholder="Bahasa Sehari-hari" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['language'])?$_SESSION['daftar']['data_pribadi']['language']:''?>" <?=isset($_SESSION['daftar']['bahasa'])&&$_SESSION['daftar']['bahasa']=='Lainnya'?'':'style="display: none"'?> />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>No Handphone <small>*</small></label>
      <input type="tel" maxlength="12" name="data_pribadi[phone]" placeholder="No Handphone" required="" class="form-control phone" value="<?=isset($_SESSION['daftar']['data_pribadi']['phone'])?$_SESSION['daftar']['data_pribadi']['phone']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>E-Mail <small>*</small></label>
      <input type="email" name="data_pribadi[email]" placeholder="E-Mail" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['email'])?$_SESSION['daftar']['data_pribadi']['email']:''?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tinggal Dengan <small>*</small></label>
      <select name="tinggal_dengan" class="form-control tinggal_dengan" required="">
        <option value="">- Pilih -</option>
        <option value="Orang Tua" <?=isset($_SESSION['daftar']['tinggal_dengan'])&&$_SESSION['daftar']['tinggal_dengan']=='Orang Tua'?'selected=""':''?>>Orang Tua</option>
        <option value="Kakek/Nenek" <?=isset($_SESSION['daftar']['tinggal_dengan'])&&$_SESSION['daftar']['tinggal_dengan']=='Kakek/Nenek'?'selected=""':''?>>Kakek/Nenek</option>
        <option value="Saudara/Paman" <?=isset($_SESSION['daftar']['tinggal_dengan'])&&$_SESSION['daftar']['tinggal_dengan']=='Saudara/Paman'?'selected=""':''?>>Saudara/Paman</option>
        <option value="Lainnya" <?=isset($_SESSION['daftar']['tinggal_dengan'])&&$_SESSION['daftar']['tinggal_dengan']=='Lainnya'?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="data_pribadi[life_with]" placeholder="Tinggal Dengan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['life_with'])?$_SESSION['daftar']['data_pribadi']['life_with']:''?>" <?=isset($_SESSION['daftar']['tinggal_dengan'])&&$_SESSION['daftar']['tinggal_dengan']=='Lainnya'?'':'style="display: none"'?> />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Anak Ke <small>*</small></label>
      <input type="number" min="1" name="data_pribadi[birth_order]" placeholder="Anak Ke" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birth_order'])?$_SESSION['daftar']['data_pribadi']['birth_order']:'1'?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Jumlah Saudara Kandung</label>
      <input min="0" type="number" name="data_pribadi[num_of_siblings]" placeholder="Jumlah Saudara Kandung" required="" class="form-control" onchange="appendSiblings(this.value)" value="<?=isset($_SESSION['daftar']['data_pribadi']['num_of_siblings'])?$_SESSION['daftar']['data_pribadi']['num_of_siblings']:'0'?>" />
    </div>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive siblings-field"></div>
  </div>
</div>

<?php if($_SESSION['daftar']['data_jenjang'] !== 'PAUD'): ?>
<center>
  <h2 class="fs-title">Asal Sekolah</h2>
</center>
<div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama RA / TK <small>*</small></label>
      <input type="text" name="asal_sekolah[name]" placeholder="Asal Sekolah" class="form-control" value="<?=isset($_SESSION['daftar']['asal_sekolah']['name'])?$_SESSION['daftar']['asal_sekolah']['name']:''?>"/>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>No Telepon <small>*</small></label>
      <input type="tel" maxlength="12" name="asal_sekolah[phone]" placeholder="No Telepon" class="form-control phone" value="<?=isset($_SESSION['daftar']['asal_sekolah']['phone'])?$_SESSION['daftar']['asal_sekolah']['phone']:''?>"/>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
      <label>Alamat Sekolah <small>*</small></label>
      <textarea name="asal_sekolah[address]" placeholder="Alamat Sekolah" class="form-control"><?=isset($_SESSION['daftar']['asal_sekolah']['address'])?$_SESSION['daftar']['asal_sekolah']['address']:''?></textarea>
    </div>
  </div>
</div>
<?php endif ?>

<center>
  <h2 class="fs-title">Prestasi</h2>
  <h3 class="fs-subtitle">Data Prestasi Akademik</h3>
</center>
<div class="row">
  <div class="col-sm-12">
    <button type="button" class="btn btn-primary" onclick="appendRow('.prestasi-akademik-row','akademik',-1)"><i class="fa fa-plus"></i> Tambah Prestasi</button>
    <p></p>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive prestasi-akademik">
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
        <tbody class="prestasi-akademik-row">
        </tbody>
      </table>
    </div>
  </div>
</div>

<center>
  <h3 class="fs-subtitle">Data Prestasi Non-Akademik</h3>
</center>
<div class="row">
  <div class="col-sm-12">
    <button type="button" class="btn btn-primary" onclick="appendRow('.prestasi-non-akademik-row','non-akademik',-1)"><i class="fa fa-plus"></i> Tambah Prestasi</button>
    <p></p>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive prestasi-non-akademik">
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
        <tbody class="prestasi-non-akademik-row">
        </tbody>
      </table>
    </div>
  </div>
</div>

<center>
  <a href="<?=base_url('daftar/index')?>" class="previous action-button-previous">Kembali</a>
  <button class="next action-button">Selanjutnya</button>
</center>
</form>