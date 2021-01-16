<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - <?=$aksi?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container-fluid">
  <center>
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
      <td><?=$key=='birthdate'?date('d F Y',strtotime($value)):$value?></td>
    </tr>
    <?php endforeach ?>
  </table>
  <p>Menegaskan bahwa pendaftar diatas sudah <?=$aksi?></p>
</div>
</body>
</html>