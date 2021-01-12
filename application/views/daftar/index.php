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
            <!-- progressbar -->
            <ul id="progressbar" style="text-align: center">
                <li class="<?=$step>0?'active':''?>">Jenjang</li>
                <li class="<?=$step>1?'active':''?>">Data Pribadi</li>
                <li class="<?=$step>2?'active':''?>">Data Orang Tua / Wali</li>
                <li class="<?=$step>3?'active':''?>">Angket Kesehatan Siswa</li>
                <li class="<?=$step>4?'active':''?>">Ringkasan</li>
            </ul>
            <!-- fieldsets -->
            <fieldset class="<?=$step==1?'active':''?>">
              <form method="post" action="<?=base_url('daftar/index/2')?>">
              <center>
                <h2 class="fs-title">Jenjang Sekolah</h2>
                <h3 class="fs-subtitle">Pilih Jenjang Sekolah</h3>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="PAUD" <?=isset($_SESSION['daftar']['data_jenjang'])&&$_SESSION['daftar']['data_jenjang']=='PAUD'?'checked':''?> type="radio" name="data_jenjang" value="PAUD" required="">
                    <label for="PAUD" class="radio_list">
                      PAUD
                    </label>
                  </center>
                </div>
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="TK" <?=isset($_SESSION['daftar']['data_jenjang'])&&$_SESSION['daftar']['data_jenjang']=='TK'?'checked':''?> type="radio" name="data_jenjang" value="TK">
                    <label for="TK" class="radio_list">
                      TK
                    </label>
                  </center>
                </div>
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="MI" <?=isset($_SESSION['daftar']['data_jenjang'])&&$_SESSION['daftar']['data_jenjang']=='MI'?'checked':''?> type="radio" name="data_jenjang" value="MI">
                    <label for="MI" class="radio_list">
                      MI
                    </label>
                  </center>
                </div>
              </div>
              <center>
              <button class="next action-button">Selanjutnya</button>
              </center>
              </form>
            </fieldset>
            <fieldset class="<?=$step==2?'active':''?>">
              <form method="post" action="<?=base_url('daftar/index/3')?>">
                <!-- <input type="hidden" name="data_jenjang" value="<?=$_SESSION['daftar']['data_jenjang']?>"> -->
              <center>
                <h2 class="fs-title">Data Pribadi</h2>
                <h3 class="fs-subtitle">Data Pribadi kamu disini</h3>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="data_pribadi[name]" placeholder="Nama Lengkap" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['name'])?$_SESSION['daftar']['data_pribadi']['name']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input type="text" name="data_pribadi[nickname]" placeholder="Nama Panggilan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['nickname'])?$_SESSION['daftar']['data_pribadi']['nickname']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">  
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="data_pribadi[gender]" class="form-control" required="">
                      <option value="">- Pilih Jenis Kelamin -</option>
                      <option value="Laki-laki" <?=isset($_SESSION['daftar']['data_pribadi']['gender'])&&$_SESSION['daftar']['data_pribadi']['gender']=='Laki-laki'?'selected=""':''?>">Laki-laki</option>
                      <option value="Perempuan" <?=isset($_SESSION['daftar']['data_pribadi']['gender'])&&$_SESSION['daftar']['data_pribadi']['gender']=='Perempuan'?'selected=""':''?>">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="data_pribadi[birthplace]" placeholder="Tempat Lahir" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birthplace'])?$_SESSION['daftar']['data_pribadi']['birthplace']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="data_pribadi[birthdate]" placeholder="Tanggal Lahir" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birthdate'])?$_SESSION['daftar']['data_pribadi']['birthdate']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="data_pribadi[religion]" placeholder="Agama" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['religion'])?$_SESSION['daftar']['data_pribadi']['religion']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="data_pribadi[address]" placeholder="Alamat" required="" class="form-control"><?=isset($_SESSION['daftar']['data_pribadi']['address'])?$_SESSION['daftar']['data_pribadi']['address']:''?></textarea>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Bahasa Sehari-hari</label>
                    <input type="text" name="data_pribadi[language]" placeholder="Bahasa Sehari-hari" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['language'])?$_SESSION['daftar']['data_pribadi']['language']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>No Handphone</label>
                    <input type="tel" name="data_pribadi[phone]" placeholder="No Handphone" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['phone'])?$_SESSION['daftar']['data_pribadi']['phone']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" name="data_pribadi[email]" placeholder="E-Mail" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['email'])?$_SESSION['daftar']['data_pribadi']['email']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tinggal Dengan</label>
                    <input type="text" name="data_pribadi[life_with]" placeholder="Tinggal Dengan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['life_with'])?$_SESSION['daftar']['data_pribadi']['life_with']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Anak Ke</label>
                    <input type="number" min="1" name="data_pribadi[birth_order]" placeholder="Anak Ke" required="" class="form-control" value="<?=isset($_SESSION['daftar']['data_pribadi']['birth_order'])?$_SESSION['daftar']['data_pribadi']['birth_order']:'1'?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Jumlah Saudara Kandung</label>
                    <input min="0" type="number" name="data_pribadi[num_of_siblings]" placeholder="Jumlah Saudara Kandung" required="" class="form-control" onchange="appendSiblings(this.value)" value="<?=isset($_SESSION['daftar']['data_pribadi']['num_of_siblings'])?$_SESSION['daftar']['data_pribadi']['num_of_siblings']:'0'?>" />
                  </div>
                </div>
                <div class="col-sm-12 siblings-field"></div>
              </div>
              
              <?php if($_SESSION['daftar']['data_jenjang'] !== 'PAUD'): ?>
              <center>
                <h2 class="fs-title">Asal Sekolah</h2>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama RA / TK</label>
                    <input type="text" name="asal_sekolah[name]" placeholder="Asal Sekolah" class="form-control" value="<?=isset($_SESSION['daftar']['asal_sekolah']['name'])?$_SESSION['daftar']['asal_sekolah']['name']:''?>"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="tel" name="asal_sekolah[phone]" placeholder="No Telepon" class="form-control" value="<?=isset($_SESSION['daftar']['asal_sekolah']['phone'])?$_SESSION['daftar']['asal_sekolah']['phone']:''?>"/>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Alamat Sekolah</label>
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
                <div class="col-sm-12 prestasi-akademik">
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

              <center>
                <h3 class="fs-subtitle">Data Prestasi Non-Akademik</h3>
              </center>
              <div class="row">
                <div class="col-sm-12">
                  <button type="button" class="btn btn-primary" onclick="appendRow('.prestasi-non-akademik-row','non-akademik',-1)"><i class="fa fa-plus"></i> Tambah Prestasi</button>
                  <p></p>
                </div>
                <div class="col-sm-12 prestasi-non-akademik">
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

              <center>
                <a href="<?=base_url('daftar/index')?>" class="previous action-button-previous">Kembali</a>
                <button class="next action-button">Selanjutnya</button>
              </center>
              </form>
            </fieldset>
            <fieldset class="<?=$step==3?'active':''?>">
              <form method="post" action="<?=base_url('daftar/index/4')?>">
              <center>
                <h2 class="fs-title">Data Orang Tua / Wali</h2>
              </center>
              <?php foreach(['ayah'=>'Ayah Kandung','ibu'=>'Ibu Kandung','wali'=>'Wali'] as $key => $value): ?>
              <center>
                <h3 class="fs-subtitle">Keterangan Tentang <?=$value?></h3>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Lengkap dan gelar</label>
                    <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['name']?>" name="data_orang_tua[<?=$key?>][name]" placeholder="Nama Lengkap dan gelar" <?=$key!='wali'?'required=""':''?> class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['religion']?>" name="data_orang_tua[<?=$key?>][religion]" placeholder="Agama" <?=$key!='wali'?'required=""':''?> class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['last_study']?>" name="data_orang_tua[<?=$key?>][last_study]" placeholder="Pendidikan Terakhir" <?=$key!='wali'?'required=""':''?> class="form-control"/>
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
                    <label>Penghasilan perbulan</label>
                    <input type="number" min="0" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['income']?>" name="data_orang_tua[<?=$key?>][income]" placeholder="Penghasilan perbulan" <?=$key!='wali'?'required=""':''?> class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Telepon Rumah / HP</label>
                    <input type="tel" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['phone']?>" name="data_orang_tua[<?=$key?>][phone]" placeholder="Telepon Rumah / HP" class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="<?=@$_SESSION['daftar']['data_orang_tua'][$key]['email']?>" name="data_orang_tua[<?=$key?>][email]" placeholder="Email" class="form-control"/>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
              <center>
                <a href="<?=base_url('daftar/index/2')?>" class="previous action-button-previous">Kembali</a>
                <button class="next action-button">Selanjutnya</button>
              </center>
            </form>
            </fieldset>
            <fieldset class="<?=$step==4?'active':''?>">
              <center>
                <h2 class="fs-title">Angket Kesetahan</h2>
                <h3 class="fs-subtitle">Isi Angket Kesehatan disini</h3>
              </center>
              <form method="post" action="<?=base_url('daftar/index/5')?>">
              <div class="row equal">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="number" min="1" name="kesehatan[weight]" placeholder="Berat Badan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['kesehatan']['weight'])?$_SESSION['daftar']['kesehatan']['weight']:''?>" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="number" min="1" name="kesehatan[hight]" placeholder="Tinggi Badan" required="" class="form-control" value="<?=isset($_SESSION['daftar']['kesehatan']['hight'])?$_SESSION['daftar']['kesehatan']['hight']:''?>"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Golongan Darah</label>
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
                    <label>Status Imunisasi</label>
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
                    <label>Mengalami Gangguan Mata</label>
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
                    <label>Mengalami Gangguan THT</label>
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
                    <label>Memiliki Alergi</label>
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
                    <label>Perawatan di Rumah Sakit</label>
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
                    <label>Pernah Pergi ke Dokter</label>
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
            </fieldset>
            <fieldset class="<?=$step==5?'active':''?>">
              <center>
                <h2 class="fs-title">Ringkasan</h2>
                <h3 class="fs-subtitle">Periksa Ringkasan Pendaftaran Kamu</h3>
              </center>
              Jenjang Pendidikan : <b><?=$_SESSION['daftar']['data_jenjang']?></b>
              <br>
              <h2 class="fs-title">Data Pribadi</h2>
              <table class="table table-bordered">
                <?php foreach($_SESSION['daftar']['data_pribadi'] as $key => $value): ?>
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
              <?php foreach(['ayah'=>'Ayah Kandung','ibu'=>'Ibu Kandung','wali'=>'Wali'] as $key => $value): ?>
                <?php if($key=='wali'&&$_SESSION['daftar']['data_orang_tua'][$key]['name']=='') continue; ?>
              <h2 class="fs-title">Keterangan Tentang <?=$value?></h2>
              <div class="row equal">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Lengkap dan gelar</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['name']?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Agama</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['religion']?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Pendidikan Terakhir</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['last_study']?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Pekerjaan</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['work']?$_SESSION['daftar']['data_orang_tua'][$key]['work']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Instansi</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['work_instance']?$_SESSION['daftar']['data_orang_tua'][$key]['work_instance']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>No Telepon Instansi</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['work_instance_phone']?$_SESSION['daftar']['data_orang_tua'][$key]['work_instance_phone']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Alamat</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['work_address']?$_SESSION['daftar']['data_orang_tua'][$key]['work_address']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Jabatan</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['position']?$_SESSION['daftar']['data_orang_tua'][$key]['position']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Penghasilan perbulan</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['income']?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Telepon Rumah / HP</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['phone']?$_SESSION['daftar']['data_orang_tua'][$key]['phone']:'-'?>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Email</label><br>
                    <?=$_SESSION['daftar']['data_orang_tua'][$key]['email']?$_SESSION['daftar']['data_orang_tua'][$key]['email']:'-'?>
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
                  <?php if(isset($_SESSION['daftar']['prestasi'])): ?>
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
                  <?php foreach($_SESSION['daftar']['prestasi']['non-akademik']['name'] as $key => $value): ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['name'][$key]?></td>
                    <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['position'][$key]?></td>
                    <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['level'][$key]?></td>
                    <td><?=$_SESSION['daftar']['prestasi']['non-akademik']['organizer'][$key]?></td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              <h2 class="fs-title">Riwayat Kesehatan</h2>
              <table class="table table-bordered">
                <?php foreach($_SESSION['daftar']['kesehatan'] as $key => $value): ?>
                <tr>
                  <td width="200"><?=$labels['kesehatan'][$key]?></td>
                  <td width="20">:</td>
                  <td><?=$value?></td>
                </tr>
                <?php endforeach ?>
              </table>
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
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
</div>
<!-- jQuery 3 -->
<script src="<?=base_url()?>public/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>public/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
function appendSiblings(value)
{
  var data = <?=json_encode(isset($_SESSION['daftar']['data_saudara'])?$_SESSION['daftar']['data_saudara']:[])?>;
  if(value == 0 || value == undefined)
  {
    $('.siblings-field').html('')
    return
  }
  var siblings_field = `<table class="table table-bordered">
                          <tr>
                            <td>No</td>
                            <td>Nama Saudara</td>
                            <td>Jenjang Pendidikan</td>
                            <td>Nama Sekolah</td>
                            <td>Kelas / Jurusan</td>
                          </tr>
                       `
  for(i=1;i<=value;i++)
  {
    var index = i-1
    siblings_field += `<tr>
                          <td>${i}</td>
                          <td><input type="text" name="data_saudara[name][]" class="form-control" value="${data&&data.name[index]?data.name[index]:''}"></td>
                          <td><input type="text" name="data_saudara[study_stage][]" class="form-control"  value="${data&&data.study_stage[index]?data.study_stage[index]:''}"></td>
                          <td><input type="text" name="data_saudara[school_name][]" class="form-control" value="${data&&data.school_name[index]?data.school_name[index]:''}"></td>
                          <td><input type="text" name="data_saudara[majors][]" class="form-control" value="${data&&data.majors[index]?data.majors[index]:''}"></td>
                       </tr>
                      `
  }
  siblings_field += '</table>'
  $(".siblings-field").html(siblings_field)
}

function appendRow(element, tipe, index = 0)
{
  var data = []
  if(tipe == 'akademik')
  data = <?=json_encode(isset($_SESSION['daftar']['prestasi']['akademik'])?$_SESSION['daftar']['prestasi']['akademik']:[])?>;
  else
  data = <?=json_encode(isset($_SESSION['daftar']['prestasi']['non-akademik'])?$_SESSION['daftar']['prestasi']['non-akademik']:[])?>;
  if(index > -1)
  var el = `<tr>
              <td><button type='button' class='btn btn-danger' onclick='removeRow(this)'>&times;</button></td>
              <td><input name='prestasi[${tipe}][name][]' value="${data&&data.name[index]?data.name[index]:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][position][]' value="${data&&data.position[index]?data.position[index]:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][level][]' value="${data&&data.level[index]?data.level[index]:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][organizer][]' value="${data&&data.organizer[index]?data.organizer[index]:''}" class='form-control'></td>
            </tr>
              `
  else
  var el = `<tr>
              <td><button type='button' class='btn btn-danger' onclick='removeRow(this)'>&times;</button></td>
              <td><input name='prestasi[${tipe}][name][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][position][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][level][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][organizer][]' class='form-control'></td>
            </tr>
              `
  $(element).append(el)
}

function removeRow(el)
{
  $(el).parent().parent().remove()
}

$('.health_select').change(function(e){
  var val = this.value
  if(val=='YA')
  {
    $(this).next().val('')
    $(this).next().css('display','block')
    $(this).next().attr('required','')
  }
  else
  {
    $(this).next().val(val)
    $(this).next().css('display','none')
    $(this).next().removeAttr('required')
  }
})

$('.imudity_select').change(function(e){
  var val = this.value
  if(val=='Lainnya')
  {
    $(this).next().val("")
    $(this).next().css('display','block')
    $(this).next().attr('required','')
  }
  else
  {
    $(this).next().val(val)
    $(this).next().css('display','none')
    $(this).next().removeAttr('required')
  }
})
</script>
<?php if(isset($_SESSION['daftar']['data_pribadi']['num_of_siblings'])): ?>
<script type="text/javascript">
  appendSiblings(<?=$_SESSION['daftar']['data_pribadi']['num_of_siblings']?>)
</script>
<?php endif ?>
<?php if(isset($_SESSION['daftar']['prestasi']['akademik'])): ?>
<script type="text/javascript">
  <?php foreach($_SESSION['daftar']['prestasi']['akademik']['name'] as $key => $value): ?>
  appendRow('.prestasi-akademik-row','akademik',<?=$key?>)
  <?php endforeach ?>
</script>
<?php endif ?>
<?php if(isset($_SESSION['daftar']['prestasi']['non-akademik'])): ?>
<script type="text/javascript">
  <?php foreach($_SESSION['daftar']['prestasi']['non-akademik']['name'] as $key => $value): ?>
  appendRow('.prestasi-non-akademik-row','non-akademik',<?=$key?>)
  <?php endforeach ?>
</script>
<?php endif ?>
</body>
</html>