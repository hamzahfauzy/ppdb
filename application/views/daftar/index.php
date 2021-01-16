<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - PENDAFTARAN</title>
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
            <fieldset class="active">
              <?php if($step==1): ?>
              <?php $this->view('daftar/_jenjang') ?>
              <?php elseif($step==2):?>
              <?php $this->view('daftar/_data-pribadi') ?>
              <?php elseif($step==3): ?>
              <?php $this->view('daftar/_data-orang-tua') ?>
              <?php elseif($step==4): ?>
              <?php $this->view('daftar/_angket-kesehatan') ?>
              <?php elseif($step==5): ?>
              <?php $this->view('daftar/_ringkasan') ?>
              <?php endif ?>
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
<?php if(isset($_SESSION['daftar']['data_saudara'])): ?>
var data = <?=json_encode(isset($_SESSION['daftar']['data_saudara'])?$_SESSION['daftar']['data_saudara']:[])?>;
<?php else: ?>
var data = {name:[],study_stage:[],majors:[],school_name:[]};
<?php endif ?>
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
  if(data.name.length)
  {
    for(i=1;i<=value;i++)
    {
      var index = i-1
      siblings_field += `<tr>
                            <td>${i}</td>
                            <td><input type="text" name="data_saudara[name][]" onchange="data.name[${index}]=this.value" class="form-control" value="${data&&data.name[index]?data.name[index]:''}"></td>
                            <td><input type="text" name="data_saudara[study_stage][]" onchange="data.study_stage[${index}]=this.value" class="form-control"  value="${data&&data.study_stage[index]?data.study_stage[index]:''}"></td>
                            <td><input type="text" name="data_saudara[school_name][]" class="form-control" onchange="data.school_name[${index}]=this.value" value="${data&&data.school_name[index]?data.school_name[index]:''}"></td>
                            <td><input type="text" name="data_saudara[majors][]" class="form-control" onchange="data.majors[${index}]=this.value" value="${data&&data.majors[index]?data.majors[index]:''}"></td>
                         </tr>
                        `
    }
  }
  else
  {
    for(i=1;i<=value;i++)
    {
      var index = i-1
      siblings_field += `<tr>
                            <td>${i}</td>
                            <td><input type="text" name="data_saudara[name][]" class="form-control" onchange="data.name[${index}]=this.value" value=""></td>
                            <td><input type="text" name="data_saudara[study_stage][]" class="form-control" onchange="data.study_stage[${index}]=this.value"  value=""></td>
                            <td><input type="text" name="data_saudara[school_name][]" class="form-control" onchange="data.school_name[${index}]=this.value" value=""></td>
                            <td><input type="text" name="data_saudara[majors][]" class="form-control" onchange="data.majors[${index}]=this.value" value=""></td>
                         </tr>
                        `
    }
  }
  siblings_field += '</table>'
  $(".siblings-field").html(siblings_field)
}

$(".phone").keypress(e => {
  if(event.which < 48 || event.which > 57 ) 
    if(event.which != 8) 
      return false;
})

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

$('.bahasa, .tinggal_dengan, .pendidikan_terakhir, .penghasilan_perbulan').change(function(e){
  var val = this.value
  if(val=='Lainnya')
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
function showOverlay()
{
  $('.loading-overlay').css('display','block')
}
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