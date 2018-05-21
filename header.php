<nav class="navbar fixed-top navbar-dark navbar-expand-md justify-content-center flex-nowarp">
	    <div class="navbar-brand d-flex w-50 mr-auto">
	    	<a href="#"><img src="image/ibc.png" class="img-fluid" width="150" height="auto"></a>
	    </div>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="navbar-collapse collapse w-100" id="myNavbar">
	        <ul class="navbar-nav w-100 justify-content-center">
	            <li class="nav-item active">
	                <a class="nav-link" href="#secthead">Beranda</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#sect2about">Tentang</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#sect3event">Event</a>
				</li>
				<li class="nav-item">
	                <a class="nav-link" href="#sect4klinik">Klinik</a>
				</li>
				<li class="nav-item">
	                <a class="nav-link" href="#sect5lowker">Lowker</a>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
	            <li class="nav-item" style="padding: 2%; width: 40%">
	                <a href="#" class="nav-link btn btn-login" data-toggle="modal" data-target="#logins" >Masuk</a>
	            </li>
	            <li class="nav-item" style="padding: 2%; width: 40%">
	                <a class="btn btn-reg nav-link" href="#">Daftar</a>
	            </li>
	        </ul>
	    </div>
	</nav>

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