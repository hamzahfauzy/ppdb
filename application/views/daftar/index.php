<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>public/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>public/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?=base_url()?>public/css/daftar.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="container">
<!-- MultiStep Form -->
<div class="row">
    <form id="msform">
        <div class="col-md-12">
            <!-- progressbar -->
            <ul id="progressbar" style="text-align: center">
                <li class="active">Jenjang</li>
                <li>Data Pribadi</li>
                <li>Data Orang Tua / Wali</li>
                <li>Angket Kesehatan Siswa</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
              <center>
                <h2 class="fs-title">Jenjang Sekolah</h2>
                <h3 class="fs-subtitle">Pilih Jenjang Sekolah</h3>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="PAUD" type="radio" name="data_jenjang" value="PAUD">
                    <label for="PAUD" class="radio_list">
                      PAUD
                    </label>
                  </center>
                </div>
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="TK" type="radio" name="data_jenjang" value="TK">
                    <label for="TK" class="radio_list">
                      TK
                    </label>
                  </center>
                </div>
                <div class="col-sm-12 col-md-4">
                  <center>
                    <input id="MI" type="radio" name="data_jenjang" value="MI">
                    <label for="MI" class="radio_list">
                      MI
                    </label>
                  </center>
                </div>
              </div>
              <center>
              <input type="button" name="next" class="next action-button" value="Selanjutnya"/>
              </center>
            </fieldset>
            <fieldset>
              <center>
                <h2 class="fs-title">Data Pribadi</h2>
                <h3 class="fs-subtitle">Data Pribadi kamu disini</h3>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="data_pribadi[name]" placeholder="Nama Lengkap" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input type="text" name="data_pribadi[nickname]" placeholder="Nama Panggilan" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">  
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="data_pribadi[gender]" class="form-control" required="">
                      <option value="">- Pilih Jenis Kelamin -</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="data_pribadi[birthplace]" placeholder="Tempat Lahir" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="data_pribadi[birthdate]" placeholder="Tanggal Lahir" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="data_pribadi[religion]" placeholder="Agama" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="data_pribadi[address]" placeholder="Alamat" required="" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Bahasa Sehari-hari</label>
                    <input type="text" name="data_pribadi[language]" placeholder="Bahasa Sehari-hari" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>No Handphone</label>
                    <input type="tel" name="data_pribadi[phone]" placeholder="No Handphone" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" name="data_pribadi[email]" placeholder="E-Mail" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Tinggal Dengan</label>
                    <input type="text" name="data_pribadi[life_with]" placeholder="Tinggal Dengan" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Anak Ke</label>
                    <input type="number" name="data_pribadi[birth_order]" placeholder="Anak Ke" required="" class="form-control" />
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Jumlah Saudara Kandung</label>
                    <input min="0" type="number" name="data_pribadi[num_of_siblings]" placeholder="Jumlah Saudara Kandung" required="" class="form-control" onchange="appendSiblings(this.value)" />
                  </div>
                </div>
                <div class="col-sm-12 siblings-field"></div>
              </div>
              <center>
                <h2 class="fs-title">Asal Sekolah</h2>
              </center>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>Nama RA / TK</label>
                    <input type="text" name="asal_sekolah[name]" placeholder="Asal Sekolah" required="" class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="tel" name="asal_sekolah[phone]" placeholder="No Telepon" required="" class="form-control"/>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Alamat Sekolah</label>
                    <textarea name="asal_sekolah[address]" placeholder="Alamat Sekolah" required="" class="form-control"></textarea>
                  </div>
                </div>
                
              </div>
              <center>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Selanjutnya"/>
              </center>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </form>
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
    siblings_field += `<tr>
                          <td>${i}</td>
                          <td><input type="text" name="data_saudara[name][]" class="form-control"></td>
                          <td><input type="text" name="data_saudara[study_stage][]" class="form-control"></td>
                          <td><input type="text" name="data_saudara[school_name][]" class="form-control"></td>
                          <td><input type="text" name="data_saudara[majors][]" class="form-control"></td>
                       </tr>
                      `
  }
  siblings_field += '</table>'
  $(".siblings-field").html(siblings_field)
}

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent().parent();
  next_fs = $(this).parent().parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent().parent();
  previous_fs = $(this).parent().parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
})
</script>
</body>
</html>