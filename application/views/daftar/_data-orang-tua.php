<form method="post" action="<?=base_url('daftar/index/4')?>">
  <center>
    <h2 class="fs-title">Data Orang Tua / Wali</h2>
  </center>
  <?php foreach(['ayah'=>'Ayah Kandung','ibu'=>'Ibu Kandung','wali'=>'Wali'] as $key => $value): ?>
  <center>
    <h3 class="fs-subtitle">Keterangan Tentang <?=$value?></h3>
  </center>
  <div class="row equal">
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Lengkap dan gelar <small>*</small></label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['name']?>" name="data_orang_tua[<?=$key?>][name]" placeholder="Nama Lengkap dan gelar" <?=$key!='wali'?'required=""':''?> class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Agama <small>*</small></label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['religion']?>" name="data_orang_tua[<?=$key?>][religion]" placeholder="Agama" <?=$key!='wali'?'required=""':''?> class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pendidikan Terakhir <small>*</small></label>
        <select name="pendidikan_terakhir[<?=$key?>]" class="form-control pendidikan_terakhir" <?=$key!='wali'?'required=""':''?>>
          <option value="">- Pilih -</option>
          <option value="SMA" <?=isset($_SESSION['daftar']['pendidikan_terakhir'][$key])&&$_SESSION['daftar']['pendidikan_terakhir'][$key]=='SMA'?'selected=""':''?>>SMA</option>
          <option value="Akademik" <?=isset($_SESSION['daftar']['pendidikan_terakhir'][$key])&&$_SESSION['daftar']['pendidikan_terakhir'][$key]=='Akademik'?'selected=""':''?>>Akademik</option>
          <option value="Sarjana" <?=isset($_SESSION['daftar']['pendidikan_terakhir'][$key])&&$_SESSION['daftar']['pendidikan_terakhir'][$key]=='Sarjana'?'selected=""':''?>>Sarjana</option>
          <option value="Lainnya" <?=isset($_SESSION['daftar']['pendidikan_terakhir'][$key])&&$_SESSION['daftar']['pendidikan_terakhir'][$key]=='Lainnya'?'selected=""':''?>>Lainnya</option>
        </select>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['last_study']?>" name="data_orang_tua[<?=$key?>][last_study]" placeholder="Pendidikan Terakhir" <?=$key!='wali'?'required=""':''?> class="form-control" <?=isset($_SESSION['daftar']['pendidikan_terakhir'][$key])&&$_SESSION['daftar']['pendidikan_terakhir'][$key]=='Lainnya'?'':'style="display: none"'?>/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pekerjaan</label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['work']?>" name="data_orang_tua[<?=$key?>][work]" placeholder="Pekerjaan"class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Instansi</label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['work_instance']?>" name="data_orang_tua[<?=$key?>][work_instance]" placeholder="Nama Instansi" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>No Telepon Instansi</label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['work_instance_phone']?>" name="data_orang_tua[<?=$key?>][work_instance_phone]" placeholder="No Telepon Instansi" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="data_orang_tua[<?=$key?>][work_address]" placeholder="Alamat" class="form-control"><?=@$_SESSION['daftar']['data_orang_tua'][$key]['work_address']?></textarea>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['position']?>" name="data_orang_tua[<?=$key?>][position]" placeholder="Jabatan" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Penghasilan perbulan <small>*</small></label>
        <select name="penghasilan_perbulan[<?=$key?>]" class="form-control penghasilan_perbulan" <?=$key!='wali'?'required=""':''?>>
          <option value="">- Pilih -</option>
          <option value="<1,5 Juta" <?=isset($_SESSION['daftar']['penghasilan_perbulan'][$key])&&$_SESSION['daftar']['penghasilan_perbulan'][$key]=='<1,5 Juta'?'selected=""':''?>><1,5 Juta</option>
          <option value="2-3 Juta" <?=isset($_SESSION['daftar']['penghasilan_perbulan'][$key])&&$_SESSION['daftar']['penghasilan_perbulan'][$key]=='2-3 Juta'?'selected=""':''?>>2-3 Juta</option>
          <option value=">3 Juta" <?=isset($_SESSION['daftar']['penghasilan_perbulan'][$key])&&$_SESSION['daftar']['penghasilan_perbulan'][$key]=='>3 Juta'?'selected=""':''?>>>3 Juta</option>
          <option value="Lainnya" <?=isset($_SESSION['daftar']['penghasilan_perbulan'][$key])&&$_SESSION['daftar']['penghasilan_perbulan'][$key]=='Lainnya'?'selected=""':''?>>Lainnya</option>
        </select>
        <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['income']?>" name="data_orang_tua[<?=$key?>][income]" placeholder="Penghasilan perbulan" <?=$key!='wali'?'required=""':''?> class="form-control" <?=isset($_SESSION['daftar']['penghasilan_perbulan'][$key])&&$_SESSION['daftar']['penghasilan_perbulan'][$key]=='Lainnya'?'':'style="display: none"'?>/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Telepon Rumah / HP</label>
        <input type="tel" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['phone']?>" name="data_orang_tua[<?=$key?>][phone]" placeholder="Telepon Rumah / HP" class="form-control"/>
      </div>
    </div>
  </div>
  <?php endforeach ?>
  <center>
    <a href="<?=base_url('daftar/index/2')?>" class="previous action-button-previous">Kembali</a>
    <button class="next action-button">Selanjutnya</button>
  </center>
</form>