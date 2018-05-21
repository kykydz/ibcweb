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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<!-- Font Face Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/kustomize.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/card-sliders.css"> -->

</head>
	
<body>

	<?php include 'header.php' ?>

	<div class="modal fade" id="logins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<h5>Masuk</h5>
	      	<form>
			  <div class="form-group">
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi">
			  </div>
			  <div class="form-check">
			  	<div class="row">
			  		<div class="col-md-6">
			  			<input type="checkbox">
			    		<small>Tetap Login</small>
			  		</div>
			  		<div class="col-md-6" align="right">
			    		<small class="mod-forgot"><a href="#"> Lupa kata sandi?</a></small>
			  		</div>
			  	</div>
			  </div>
			  <div class="form-group">
			  	<div class="row mod-padd">
			  		<div class="col" align="center">
			  		<a href="#" class="btn btn-masuks">Masuk</a>		
			  		</div>
			  	</div>
			    
			  </div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

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
			<div class="tittle-sec2">
				<h1><strong>Tentang Kami</strong></h1>
			</div>
			<div class="konten-sec2">
				<p style="line-height: 160%">Indonesia Banker Club (IBC) merupakan asosiasi/ perkumpulan/ komunitas bankers maupun ex-bankers dari seluruh Indonesia.
				Perkumpulan ini bersifat terbuka, lintas bank, provinsi, dan mengusung persaudaraan.
				IBC memiliki forum diskusi online di WhatsApp Group (by Regional dan segment).</p>
			</div>
		</div>
	</section>
	<section id="sect3event">
		<div class="container" align="center">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-md-5">
							<div class="tittle-sec">
								<h1><strong>Event</strong> Perbankan</h1>
							</div>
						</div>
						<div class="col-md-5" align="left">
							<p style="line-height: 160%; margin: 0">Event Perbankan memberikan solusi teknolog terlengkap di industri Perbankan. 
							Kunjungi Event Perbankan untuk keterangan lebih lengkap</p>	
						</div>
						<div class="col-md-2 btn-mid" >
							<a href="#" class="btn btn-success ">Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col carousel slide" data-ride="carousel" id="postsCarousel" >
					<!-- <?php include 'card-biasa.php' ?> -->
					<?php include 'tests.php' ?>
				</div>
			</div>
		</div>
	</section>
	<section id="sect4klinik">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tittle-sec">
					<h1><strong>KLINIK</strong> Perbankan</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 newss">
					<div class="row kontens">
						<div class="col-md-1 nomer">
							1
						</div>
						<div class="col-md-11 deskripsi">
							<div class="row ">
								<div class="col-md-6 tittle-news">
									Syarat dan Prosedur Pengajuan Pembebasan Bersyarat
								</div>
							</div>
							<div class="row details">
								<div class="col-md-12">Di <span class="cat-news"> Hukum Pidana</span></div>
								<div class="col-md-5">
									Jawaban Oleh <span>Tri Ayu Pramesti, S.H.</span>
								</div>
								<div class="col-md-4">Sumber Dari : <span>Bung Pokro</span></div>
								<div class="col-md-3">Tgl. <span>10 April 2018</span></div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row kontens">
						<div class="col-md-1 nomer">
							2
						</div>
						<div class="col-md-11 deskripsi">
							<div class="row ">
								<div class="col-md-6 tittle-news">
									Syarat dan Prosedur Pengajuan Pembebasan Bersyarat
								</div>
							</div>
							<div class="row details">
								<div class="col-md-12">Di <span class="cat-news"> Hukum Pidana</span></div>
								<div class="col-md-5">
									Jawaban Oleh <span>Tri Ayu Pramesti, S.H.</span>
								</div>
								<div class="col-md-4">Sumber Dari : <span>Bung Pokro</span></div>
								<div class="col-md-3">Tgl. <span>10 April 2018</span></div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row kontens">
						<div class="col-md-1 nomer">
							3
						</div>
						<div class="col-md-11 deskripsi">
							<div class="row ">
								<div class="col-md-6 tittle-news">
									Syarat dan Prosedur Pengajuan Pembebasan Bersyarat
								</div>
							</div>
							<div class="row details">
								<div class="col-md-12">Di <span class="cat-news"> Hukum Pidana</span></div>
								<div class="col-md-5">
									Jawaban Oleh <span>Tri Ayu Pramesti, S.H.</span>
								</div>
								<div class="col-md-4">Sumber Dari : <span>Bung Pokro</span></div>
								<div class="col-md-3">Tgl. <span>10 April 2018</span></div>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-3 populers">
					<div class="tittle-news" style="font-size: 1.6em">ARTIKEL Populer</div>
					<div class="pop-items">
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
						<div class="pop-news">
							Begini Kualitas yang Dicari Firma Hukum Besar dari Lulusan Kampus Hukum<br>
							<small>19 Mei 2018 Pukul 08.34 WIB</small> 
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sect5lowker">
		<div class="container">
			<div class="row sec5tittle">
				<div class="col-md-3 sec5line">
					<hr>
				</div>
				<div class="col-md-6 sec5line">
					<h1>LOWONGAN KERJA PERBANKAN TERBARU</h1>
				</div>
				<div class="col-md-3 sec5line">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="cardz">
						<div class="img-cardz">	
							<img src="image/dd.jpg" class="img-fluid" >
						</div>
						<div class="container konten-cardz">
							<div class="cardz-tittle">
								<h6 class="job-tittle">Bank Mandiri Syariah</h6>
							</div>
							<div class="cardz-desc">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Bank BRI Syariah</p> 
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Jakarta Selatan, DKI Jakarta Expense Only</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p ><span class="job-type">Internship</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-11" align="center">
										<a class="btn btn-def">OPEN</a>
									</div>
								</div>
								<div class="row">
									<div class="col-3" align="right">
										<a class="btn btn-left">23</a>
									</div>
									<div class="col-8" align="left">
										<div class="row">
											<p class="col desc-left">DAYS LEFT TO APPLY</p>	
										</div>
										<div class="row"> 
											<p class="col pelamars"><i class="fas fa-users"></i> Pelamar: 13</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cardz">
						<div class="img-cardz">	
							<img src="image/dd.jpg" class="img-fluid" >
						</div>
						<div class="container konten-cardz">
							<div class="cardz-tittle">
								<h6 class="job-tittle">Bank Mandiri Syariah</h6>
							</div>
							<div class="cardz-desc">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Bank BRI Syariah</p> 
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Jakarta Selatan, DKI Jakarta Expense Only</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p ><span class="job-type">Internship</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-11" align="center">
										<a class="btn btn-def">OPEN</a>
									</div>
								</div>
								<div class="row">
									<div class="col-3" align="right">
										<a class="btn btn-left">23</a>
									</div>
									<div class="col-8" align="left">
										<div class="row">
											<p class="col desc-left">DAYS LEFT TO APPLY</p>	
										</div>
										<div class="row"> 
											<p class="col pelamars"><i class="fas fa-users"></i> Pelamar: 13</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cardz">
						<div class="img-cardz">	
							<img src="image/dd.jpg" class="img-fluid" >
						</div>
						<div class="container konten-cardz">
							<div class="cardz-tittle">
								<h6 class="job-tittle">Bank Mandiri Syariah</h6>
							</div>
							<div class="cardz-desc">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Bank BRI Syariah</p> 
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Jakarta Selatan, DKI Jakarta Expense Only</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p ><span class="job-type">Internship</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-11" align="center">
										<a class="btn btn-def">OPEN</a>
									</div>
								</div>
								<div class="row">
									<div class="col-3" align="right">
										<a class="btn btn-left">23</a>
									</div>
									<div class="col-8" align="left">
										<div class="row">
											<p class="col desc-left">DAYS LEFT TO APPLY</p>	
										</div>
										<div class="row"> 
											<p class="col pelamars"><i class="fas fa-users"></i> Pelamar: 13</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cardz">
						<div class="img-cardz">	
							<img src="image/dd.jpg" class="img-fluid" >
						</div>
						<div class="container konten-cardz">
							<div class="cardz-tittle">
								<h6 class="job-tittle">Bank Mandiri Syariah</h6>
							</div>
							<div class="cardz-desc">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Bank BRI Syariah</p> 
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p>Jakarta Selatan, DKI Jakarta Expense Only</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-suitcase"></i>
									</div>
									<div class="col-10">
										<p ><span class="job-type">Internship</span></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-11" align="center">
										<a class="btn btn-def">OPEN</a>
									</div>
								</div>
								<div class="row">
									<div class="col-3" align="right">
										<a class="btn btn-left">23</a>
									</div>
									<div class="col-8" align="left">
										<div class="row">
											<p class="col desc-left">DAYS LEFT TO APPLY</p>	
										</div>
										<div class="row"> 
											<p class="col pelamars"><i class="fas fa-users"></i> Pelamar: 13</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mores">
					<a href="#" class="btndef">Muat Lebih Banyak</a>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
	
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<!-- <script src="js/card-slider.js"/> -->
	
	<!-- <script>
		(function($) {
		    "use strict";
		    // manual carousel controls
		    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
		    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
		    
		})(jQuery);

		$('.carousel').carousel({
          interval: 600000,
          pause: "hover"
        });
	</script> -->
	<script type="text/javascript">
		
		$('#carouselExample').on('slide.bs.carousel', function (e) {
		    var $e = $(e.relatedTarget);
		    var idx = $e.index();
		    var itemsPerSlide = 4;
		    var totalItems = $('.carousel-item').length;
		    
		    if (idx >= totalItems-(itemsPerSlide-1)) {
		        var it = itemsPerSlide - (totalItems - idx);
		        for (var i=0; i<it; i++) {
		            // append slides to end
		            if (e.direction=="left") {
		                $('.carousel-item').eq(i).appendTo('.carousel-inner');
		            }
		            else {
		                $('.carousel-item').eq(0).appendTo('.carousel-inner');
		            }
		        }
		    }
		});

		  $('#carouselExample').carousel({ 
		                interval: 200000
		        });

		  $(document).ready(function() {
		/* show lightbox when clicking a thumbnail */
		    $('a.thumb').click(function(event){
		      event.preventDefault();
		      var content = $('.modal-body');
		      content.empty();
		        var title = $(this).attr("title");
		        $('.modal-title').html(title);        
		        content.html($(this).html());
		        $(".modal-profile").modal({show:true});
		    });

		  });
	</script>

	<script>
		// Add scrollspy to <body>
		$('body').scrollspy({target: ".navbar", offset: 4000});

		// Add smooth scrolling on all links inside the navbar
		$("#myNavbar a").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {

			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
			scrollTop: $(hash).offset().top
			}, 800, function(){

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
			});

		} // End if

		});
	</script>
</body>

</html>