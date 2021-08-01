<?php 
session_start(); 
if(!isset($_SESSION["email"])){
echo "<script>";
echo "alert('Anda telah log keluar, sila log masuk semula.');";
echo "location = 'index.php'";
 echo "</script>";
    }
   
?>
<?php
include "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BJB &mdash; Ruang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<!-- header-->	
<style>
    .controls{width:800px; background:#ccc; padding:15px;width: 600px;
    background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc;}
    
.btn-group
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
   
}
</style>

<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="#">Sistem Tempahan BJB</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="portal_admin.php">Halaman Utama</a></li>
							<li><a class="active" href="managespace.php">Ruang</a></li>
							<li>
                                        <a href="#" class="fh5co-sub-ddown">Orang Awam</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="view_reserve_request.php">Tempahan Baru</a></li>
                                            <li><a href="view_reserve_public.php">Senarai Tempahan</a></li>
                                            <li><a href="view_history_reserve_public.php">Sejarah Pembayaran</a></li>
                                           

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Residen</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="view_reserve_request_resident.php">Tempahan Baru</a></li>
                                            <li><a href="view_reserve_resident.php">Senarai Tempahan</a></li>
                                            <li><a href="view_history_reserve_resident.php">Sejarah Pembayaran</a></li>

                                        </ul>
                                    </li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Tetapan</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">Profil</a></li>
								 	<li><a href="logout.php">Log Keluar</a></li>
								
								</ul>
							</li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/bluebg.JPG);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Pengurusan Ruang</h1>
						<p>Kemaskini Ruang dan Fasiliti anda disini <a href="http://freehtml5.co"></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>



<body>
       
	<form action="addspace.php" method= "POST" enctype="multipart/form-data">

            <div class="container">

                <div class="row">

                    <div class="container-fluid">

                        <div class="col-sm-14">
     <h2 class="heading">Tambah ruang</h2>
    <div class="box_2">
   
     <label for="name">Nama ruang: </label><br>
      <input type="text" id="name"  name="name"  required>
    
    <br>
    
     <label for="description">Penerangan: </label><br>
      <textarea  class="form-control" name="description" cols="50" rows="8" placeholder="contoh: Menyediakan 3 kipas angin" required></textarea>
   
   
    
     
      <i class="fa fa-sort"></i>
      <label for="category" id="category" required>Kategori: </label><br>
     <select class="form-control" name="category">
        <option value="blank"   >--Sila pilih disini--</option>
                            <option value="Dewan">Dewan</option>
                            <option value="Kolong">Kolong</option>
                            <option value="Rumah Penginapan">Rumah Penginapan</option>
                            <option value="Tempat Beriadah">Tempat Beriadah</option>
                        </select>
      </select>
      
     <br>
   
        <label for="capacity">Kapasiti: </label><br>
      <input type="number" name="capacity"   class="form-control" min = "0" max = "" required>
   
    <br>
      <i class="fa fa-sort"></i>
      <label for="block" id="block" required>Blok:</label><br>
      <select  class="form-control" name="block">
        <option value="blank">--Sila pilih disini--</option>
                            <option value="Kenari">Kenari</option>
                            <option value="Merak">Merak</option>
                            <option value="Nuri">Nuri</option>
                            <option value="Jentayu">Jentayu</option>
                        </select>
     
<br>


          <label for="price_public">Penduduk luar(RM): </label><br>
            <input  class="form-control" type="number" name="price_public"  min = "0" max = ""    required>
<br>
          <label for="price_resident">Penduduk(RM): </label><br>
            <input type="number" name="price_resident" class="form-control" min = "0" max = ""   required>
  
        
<br>          
  
      <i class="fa fa-sort"></i>
      <label for="status" id-"status" required>Status:</label><br>
    <select  class="form-control" name="status">
        <option value="blank">--Sila pilih disini--</option>
                            <option value="ada">Ada</option>
                            <option value="tiada">Tiada</option>
                        </select>
    
 <br>        
   
        <label for="country">Gambar:</label><br>
        <input type="file" name="pic"  size="25" id="pic" required>

      </div>
<!-- Buttons -->
            <div class="button-container" align=center>
                <div>
                    <input type="submit" class="viewmore" name="submit" id="same" value="Hantar">
            
                    <input type="reset" class="viewmore" id="same" onclick="myFunction()" value="Set Semula">
            
                    <a href="managespace.php">
                        <input type="button" class="viewmore" id="same" value="Kembali">
                    </a>
                </div>
        </div>
            <!-- Buttons END -->
          
        </form>
             
            </div>
   		</div>
  </div>
  </div>
</body>

   
<!-- Footer-->
	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Fasiliti Kami</h3>
							<ul class="link">
								<li><a href="#">Homestay</a></li>
								<li><a href="#">Kolong</a></li>
								<li><a href="#">Dewan</a></li>
								<li><a href="#">Padang</a></li>
								<li><a href="#">Gim</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>



</html>