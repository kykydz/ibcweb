<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" type="text/css" href="css/kustomize.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/card-sliders.css"> -->

	<style type="text/css">
.MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; height: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
	</style>
	

</head>
	
<body>

	<nav class="navbar fixed-top navbar-dark navbar-expand-md justify-content-center flex-nowarp">
	    <div class="navbar-brand d-flex w-50 mr-auto">
	    	<a href="#"><img src="image/ibc.png" class="img-fluid" width="150" height="auto"></a>
	    </div>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
	        <ul class="navbar-nav w-100 justify-content-center">
	            <li class="nav-item active">
	                <a class="nav-link" href="#">Beranda</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Tentang Kami</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Kontak</a>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
	            <li class="nav-item" style="padding: 2%; width: 40%">
	                <a class="nav-link btn btn-login" href="#">Masuk</a>
	            </li>
	            <li class="nav-item" style="padding: 2%; width: 40%">
	                <a class="btn btn-reg nav-link" href="#">Daftar</a>
	            </li>
	        </ul>
	    </div>
	</nav>

	<section id="secthead">
		<div class="container">
			<div class="konten-jumbo">
				<div class="row">
					<div class="col-md-6">
						<h1>BEING IN CONTROL</h1>
						<h1>OF YOUR <strong class="ex">FINANCES</strong></h1>
						<p>Financial advice that give the amount to protect what's yours</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" align="center" style="padding: 0 15% 0 4%">
						<a class="btn btn-reg nav-link" href="#" >Daftar</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sect2about">
		<div class="container" align="center">
			<div class="tittle-sec">
				<h1><strong>Tentang Kami</strong></h1>
			</div>
			<div class="konten-sec">
				<p style="line-height: 160%">Indonesia Banker Club (IBC) merupakan asosiasi/perkumpulan/komunitas bankers maupun ex-bankers dari seluruh Indonesia.
				Perkumpulan ini bersifat terbuka, lintas bank, provinsi, dan mengusung persaudaraan.
				IBC memiliki forum diskusi online di WhatsApp Group (by Regional dan segment).</p>
			</div>
		</div>
	</section>
	<section id="sect3event">
		<div class="container" align="center">
			<div class="row">
				<div class="col">
					<div class="tittle-sec">
						<h1><strong>Event</strong></h1>
					</div>
					<div class="konten-sec">
						<p style="line-height: 160%">Indonesia Banker Club (IBC) merupakan asosiasi/perkumpulan/komunitas bankers maupun ex-bankers dari seluruh Indonesia.
						Perkumpulan ini bersifat terbuka, lintas bank, provinsi, dan mengusung persaudaraan.
						IBC memiliki forum diskusi online di WhatsApp Group (by Regional dan segment).</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col carousel slide" data-ride="carousel" id="postsCarousel" style="height: 300px">
					<?php include 'card-biasa.php' ?>
				</div>
			</div>
			
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- <script src="js/card-slider.js"/> -->
	
	<script>
		(function($) {
		    "use strict";

		    // manual carousel controls
		    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
		    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
		    
		})(jQuery);
	</script>
</body>

</html>