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