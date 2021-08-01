<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BJB &mdash; Tempahan Ruang</title>
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
							<li><a href="index.php">Halaman Utama</a></li>
							<li><a class="active" href="about_us.html">Mengenai Kami</a></li>
							<li><a href="contactus_index.php">Hubungi Kami</a></li>
							<li><a href="login.php">Log Masuk</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/bjb.JPG);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Kami Memudahkan Urusan Anda</h1>
						<h1>Pendaftaran Penganjur Program</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
			 <form action="newsignup.php" method="POST">
        <h2 align="center">Seksyen 1: Informasi Peribadi</h2>
        <label>Nama</label>
        <input type="text" name="fullname" placeholder="Nama Sebenar" required>

        <label>Nombor IC/ Passport</label>
        <input type="text" name="no_ic" placeholder="Nombor kad pengenalan" pattern="[0-9]{12}" required>

        <label>Tempat Tinggal</label><br>
        <textarea name="address" rows="5" cols="70" required></textarea><br><br>

  <label>Nama Pengguna Baru</label>
        <input type="text" name="n_username" placeholder="nama pengguna baru" required>
        

        <label>Tel no. Peribadi</label>
        <input type="text" name="telno" placeholder="0123456789"  required>

        <label>Pekerjaan</label>
        <input type="text" name="job" placeholder="pekerjaan" required>
        
        
        <label>Tel no. Organisasi</label>
        <input type="text" name="org_telno" placeholder="0123456789" required>



        <h2 align="center"><br>Seksyen 2: Emel & Kata laluan</h2>

     <center><label>E-mel</label>
        <input type="email" name="email" placeholder="cth: abc@gmail.com" required><br>

        <label>Kata Laluan Baru</label>
        <input type="password" name="n_pwd_1" placeholder="kata laluan baru" required><br>

        <label>Taip Semula Kata Laluan Baru</label>
        <input type="password" name="n_pwd_2" placeholder="kata laluan baru" required><br>
<label for="role">Role as:</label>
                <select id="role" name="role" required>
                    <option value="public">Public</option>
                    <option value="resident">Resident</option>
                </select>
            <br>
        <input type="submit" name="submit" value="Hantar Borang Pendaftaran" id="reg_btn"></center> 
    </form>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2020 Bangsa Johor Bahagia. <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">Membertech</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
		
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
<?php
    if(isset($_POST['submit'])){    // If submit,
        include_once("dbconfig.php");
        
        $a = $b = $c = "";
        $a = mysqli_real_escape_string($conn, $_REQUEST['n_pwd_1']);
        $b = mysqli_real_escape_string($conn, $_REQUEST['n_pwd_2']);
        $c = mysqli_real_escape_string($conn, $_REQUEST['email']);
        
        $sql = "SELECT email FROM account WHERE email='$c' ";  // check whether the username has been taken.
        
        $check = mysqli_query($conn,$sql);
        
        if($check->num_rows == 0){ //check if username not existed,
            if($a == $b){   // If passwords are matched,
        
                $name = mysqli_real_escape_string($conn, $_REQUEST['fullname']);
                $ic = mysqli_real_escape_string($conn, $_REQUEST['no_ic']);
                $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
                $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
                $telno = mysqli_real_escape_string($conn, $_REQUEST['telno']);
                $job = mysqli_real_escape_string($conn, $_REQUEST['job']);
                $org_telno = mysqli_real_escape_string($conn, $_REQUEST['org_telno']);
                $new_username = mysqli_real_escape_string($conn, $_REQUEST['n_username']);
                $new_password = mysqli_real_escape_string($conn, $_REQUEST['n_pwd_1']);
                $role = mysqli_real_escape_string($conn, $_REQUEST['role']);
                
                // Insert data into table "po"
                $sql1 = "INSERT INTO account(no_ic, username, fullname, email,job, telno, office_no, address, role,password) VALUES ('$ic','$new_username','$name','$email','$job', '$telno', '$org_telno','$address','$role','$new_password')";
    

                $result1 = mysqli_query($conn,$sql1);

                if($result1){ // If po query run w/out error

                        echo "<script>";
                        echo "alert('Permohonan telah berjaya dihantar. Sila tunggu notifikasi emel. Semoga berjaya.');";
                        echo "location = 'login.php'";
                        echo "</script>";
                    }
                }
                else{
                    echo "<script>";
                    echo "alert('PO Insert Database error');";
                    echo "</script>";
                }
            }
            else{   // If passwords are not matched,
                echo "<script>";
                echo "alert('Sila pastikan kedua-dua kata laluan adalah bersama.');";
                echo "</script>";
            }
        }
        
    
?>
</html>