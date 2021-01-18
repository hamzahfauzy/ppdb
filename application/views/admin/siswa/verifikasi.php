<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - Verifikasi</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<img src="<?=$kop?>" width="100%">
<center>
  <h2>Informasi Pendaftaran</h2>
  <br>
</center>
<table width="100%">
  <tr>
    <td width="160px" valign="top">
      <img src="<?=$pas_foto?>" width="150px" height="200px" style="object-fit: cover;object-position: center;">
    </td>
    <td valign="top">
      <table width="100%" border="1" cellpadding="5" cellspacing="0">
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
          <td><img src="<?=$qrcode?>" width="150px" height="150px" style="object-fit: cover;object-position: center;"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>