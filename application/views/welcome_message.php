<?php 
require 'functions.php';
$site = site();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $site['title'] ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('public/css/styles.css')?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top main-nav bg">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><?= $site['title']?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item home active">
					<a class="nav-link" href="javascript:void(0)" onclick="doScrollTo('body')">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item tingkat-sekolah">
					<a class="nav-link" href="javascript:void(0)" onclick="doScrollTo('#tingkat-sekolah')">Tingkat Sekolah</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)">Cara Mendaftar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)">Cek Pengumuman</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-primary btn-nav-daftar" href="<?=base_url('daftar')?>">Mendaftar</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<section class="hero d-flex align-items-center" style="background-image: url('<?=base_url('public/images/hero-1.jpg')?>')">
	<div class="overlay"></div>
	<div class="hero-item container">
		<div class="row">
			<div class="col-12 col-md-8">
				<h3 class="hero-subtitle"><?=$site["hero_subtitle"]?></h3>
				<h1 class="hero-title"><?=$site["hero_title"]?></h1>
				<span class="hero-tagline"><?=$site['hero_tagline']?></span>
			</div>	
			<div class="col-12 col-md-4 d-flex align-items-center justify-content-center" style="min-height: 150px;">
				<button class="btn btn-primary rounded-circle" style="padding: 26px 26px;"><i class="fa fa-play fa-fw fa-lg"></i></button>
			</div>	
		</div>
		
	</div>
</section>

<section class="tingkat-sekolah container" id="tingkat-sekolah">
	<div class="title-container">
		<h1 class="upcoming-section-title">Tingkat Sekolah</h1>
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-info" onclick="formTK.submit()" style="cursor: pointer;">
				<img class="card-img" src="<?=base_url('public/images/ic-_kelas.svg')?>">
				<div class="card-body text-center">
					<h4 class="card-title">TK</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
				<form style="display: none" method="post" action="<?=base_url('daftar/index/2')?>" id="formTK"><input type="hidden" name="data_jenjang" value="TK"></form>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-warning" onclick="formPAUD.submit()" style="cursor: pointer;">
				<img class="card-img" src="<?=base_url('public/images/ic-_mahasiswa.svg')?>">
				<div class="card-body text-center">
					<h4 class="card-title">PAUD</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
				<form style="display: none" method="post" action="<?=base_url('daftar/index/2')?>" id="formPAUD"><input type="hidden" name="data_jenjang" value="PAUD"></form>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card jenjang-card bg-success" onclick="formMI.submit()" style="cursor: pointer;">
				<img class="card-img" src="<?=base_url('public/images/ic-_program studi.svg')?>">
				<div class="card-body text-center">
					<h4 class="card-title">MI</h4>
					<div class="product-description">
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
				<form style="display: none" method="post" action="<?=base_url('daftar/index/2')?>" id="formMI"><input type="hidden" name="data_jenjang" value="MI"></form>
			</div>
		</div>
	</div>
</section>

<!-- <section class="upcoming-section container" id="upcoming-event">
	<div class="title-container">
		<h1 class="upcoming-section-title">Profil Yayasan</h1>
	</div>
	<div class="upcoming-content container-fluid">
		<div class="row">
			<div class="col-12 col-md-5">
				<img src="images/yayasan.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-12 col-md-7">
				<h2 class="upcoming-title pt-3">Profil <?=$site['name']?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>
	</div>
</section> -->

<section class="contact-us-section" id="contact-us">
	<div class="overlay"></div>
	<div class="container contact-us-container">
		<h1 class="contact-us-title">Daftar Sekarang!</h1>
		<div class="contact-us-content text-center">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<a href="<?=base_url('auth/login')?>" class="btn btn-primary">Daftar Sekarang!</a>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<center>
			 Copyright &copy; 2021. <b><?=$site['name']?></b>
			 <br>
			 <a href="">Privacy and Policy</a> | <a href="">Terms and Conditions</a>
		</center>
	</div>
</footer>

<button class="btn btn-danger" onclick="doScrollTo('body')" id="scroll_to_top" title="Go to top">
	<i class="fa fa-angle-up fa-fw"></i>
</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
var nav_height = 80;
var $nav = $('.main-nav');
var $win = $(window);
var winH = $win.height();   // Get the window height.
$win.on("scroll", function () {
    addClassToNav()
    var windscroll = $(window).scrollTop();
    if (windscroll >= nav_height) {
        $('body section').each(function(i) {
            if ($(this).position().top <= (windscroll+nav_height)) {
                $('.nav-item').removeClass('active');
                $('.nav-item').eq(i).addClass('active');
            }
        });

    }
}).on("resize", function(){ // If the user resizes the window
   winH = $(this).height(); // you'll need the new height value
});

function addClassToNav(){
	return
	if ($(this).scrollTop() > nav_height ) {
        $nav.addClass("bg");
        $("#scroll_to_top").css("display","block")
    } else {
        $nav.removeClass("bg");
        $("#scroll_to_top").css("display","none")
    }
}

function doScrollTo(el)
{
	var margin = 15
	// if(el == '#tingkat-sekolah') margin = -20
	$('html, body').animate({
        scrollTop: $(el).offset().top-nav_height+margin
    }, 1000);
}

addClassToNav()
</script>
</html>