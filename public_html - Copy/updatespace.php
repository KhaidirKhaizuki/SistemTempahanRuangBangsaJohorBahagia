<?php 
include "dbconfig.php";
session_start(); 
if(!isset($_SESSION["email"])){
echo "<script>";
echo "alert('Anda telah log keluar, sila log masuk semula.');";
echo "location = 'index.php'";
 echo "</script>";
    }
   
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
<style>
.btn-primary
{
  background-color: #68889E;
  color:#FFF;
  border-color: #2F3E48;
}
.btn-primary:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {

  background-color: #2F3E48;
  color:#FFF;
  border-color: #31347B;
 }

</style>
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
						<li><a   href="portal_admin.php">Halaman Utama</a></li>
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
								 	<li><a href="kk_admin.php">Profil</a></li>
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
						<p>Kemaskini Ruang dan Fasiliti anda disini. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
<html>
<head>
<title></title>
</head>
<body>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

    $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

   $strpace_id = null;

   if(isset($_GET["space_id"]))
   {
	   $strspace_id = $_GET["space_id"];
   }
  
    $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

   $sql = "SELECT * FROM space WHERE space_id = '".$strspace_id."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<form name="frmUser" action="save.php"   method="post" enctype="multipart/form-data">

            <div class="container">

                <div class="row">

                    <div class="container-fluid">

                        <div class="col-sm-14">
     <h2 class="heading">Kemaskini ruang</h2>
    <div class="box_2">
    <label for="name">Space ID: </label><br>
     <input type="hidden" name="space_id" value="<?php echo $result["space_id"];?>"><?php echo $result["space_id"];?>
    
    <br>
     <label for="name">Nama ruang: </label><br>
      <input type="text" name="name" size="100" value="<?php echo $result["name"];?>">
    <br>
    
     <label for="description">Penerangan: </label><br>
     <textarea  class="form-control" name="description" cols="50" rows="8" placeholder="contoh: Menyediakan 3 kipas angin" value="<?php echo $result["description"];?>"><?php echo $result["description"];?>
          </textarea>
   
   <br>
    
     
      <i class="fa fa-sort"></i>
      <label for="category" id="category" required>Kategori: </label><br>
     <select class="form-control" name="category">
         <option value="">--Sila pilih disini--</option>
						<option <?php if($result['category']=="Dewan"){echo "selected";}?>>Dewan</option>
						<option <?php if($result['category']=="Kolong"){echo "selected";}?>>Kolong</option>
						<option <?php if($result['category']=="Rumah Penginapan"){echo "selected";}?>>Rumah Penginapan</option>
						<option <?php if($result['category']=="Tempat Beriadah"){echo "selected";}?>>Tempat Beriadah</option>
					
      </select>
      
     <br>
   
        <label for="capacity">Kapasiti: </label><br>
      <input type="number" name="capacity"   class="form-control" min = "0" max = "" value="<?php echo $result["capacity"];?>">
   
    <br>
      <i class="fa fa-sort"></i>
      <label for="block" id="block" required>Blok:</label><br>
      <select  class="form-control" name="block">
        <option value="">--Sila pilih disini--</option>
						<option <?php if($result['block']=="Kenari"){echo "selected";}?>>Kenari</option>
						<option <?php if($result['block']=="Merak"){echo "selected";}?>>Merak</option>
						<option <?php if($result['block']=="Nuri"){echo "selected";}?>>Nuri</option>
						<option <?php if($result['block']=="Jentayu"){echo "selected";}?>>Jentayu</option>
					</select>
     
<br>


          <label for="price_public">Penduduk luar(RM): </label><br>
            <input  class="form-control" type="number" name="price_public"  min = "0" max = "" value="<?php echo $result["price_public"];?>"   >
<br>
          <label for="price_resident">Penduduk(RM): </label><br>
            <input type="number" name="price_resident" class="form-control" min = "0" max = ""   value="<?php echo $result["price_resident"];?>">
  
        
<br>          
  
      <i class="fa fa-sort"></i>
      <label for="status" id-"status" required>Status:</label><br>
    <select  class="form-control" name="status">
    <option value="">--Sila pilih disini--</option>
						<option <?php if($result['status']=="ada"){echo "selected";}?>>ada</option>
						<option <?php if($result['status']=="tiada"){echo "selected";}?>>tiada</option>
					</select>
 <br>   
                 
                <div class="input-group-append">
                   
  <input type="submit" class="btn btn-primary" name="submit" value="Hantar">
     <a href="managespace.php">
    <input type="button"  class="btn btn-primary" class="back" id="button" value="Kembali">                  </a>
                </div>
            </div>
        </div>
    </div>

</form>
</div>
<?php
mysqli_close($conn);
?>
</div>
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
							<!--<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>-->
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
