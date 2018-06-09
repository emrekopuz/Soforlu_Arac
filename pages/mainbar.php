<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +66666666 </li>
			</ul>
			<ul class="logreg">
				<span class="register btn btn-primary" onclick="show_popup('popup_upload')">Login </span> 
				<span class="register btn btn-success" onclick="document.getElementById('id01').style.display='block'">Register</span>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<span class="navbar-header"><a class="navbar-brand logo" href="#"><span></span><img src="image/wings.png" height="58"></a></span>
			<ul class="nav navbar-nav" id="navbarontop">
			  <li class="active"><a href="#">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="#">Sport</a></li>
						<li><a href="#">Old</a></li>
						<li><a href="#">New</a></li>
					</ul>
				</li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="3">3</a></li>
						</ul>
				</li>
				<li>
					<a href="contact.html">CONTACT</a>
 
				</li>
				<button><span class="postnewcar">POST NEW CAR</span></button>
			</ul>
		</div>
	</nav>
</div>
<div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-light-blue"> 
              <span onclick="document.getElementById('id01').style.display='none'" 
              class="w3-button w3-display-topright"><i class="fa fa-fw fa-times"></i></span>
              <h2 class="w3-center">KAYIT YÖNLENDİR</h2>
            </header>
            <div class="w3-container w3-light-blue w3-center">
              <div class="input-group-btn">
                        <span  class="btn btn-danger import"> <a href="hizmetAlan/index.php"><i class="fa fa-fw fa-plus-square-o" ></i>Hizmet Alan Kayıt</a></span>
                        <span  class="btn btn-danger import"><a href="hizmetVeren/index.php"><i class="fa fa-fw fa-plus-square-o" ></i>Şoför Kayıt</a></span>
                        <span  class="btn btn-danger import2"><a href="yonetici/index.php"><i class="fa fa-fw fa-plus-square-o"></i>Yönetici Kayıt</a></span>
              </div><!-- /btn-group -->
            </div>
		  </div>
</div>
