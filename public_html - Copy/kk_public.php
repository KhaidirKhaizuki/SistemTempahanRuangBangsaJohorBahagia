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
    include_once("dbconfig.php");
    if(isset($_POST['submit'])){ // If submit button is triggered,
        $address = $email = $telno = $postcode = $address2 = $address3 = $address4  = "";

        $email = $_SESSION["email"];
        
        $address = mysqli_real_escape_string($conn,$_REQUEST['address']);
        $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
        $telno = mysqli_real_escape_string($conn,$_REQUEST['telno']);
        $postcode = mysqli_real_escape_string($conn,$_REQUEST['postcode']);
        $address2 = mysqli_real_escape_string($conn,$_REQUEST['address2']);
        $address3 = mysqli_real_escape_string($conn,$_REQUEST['address3']);
        $address4 = mysqli_real_escape_string($conn,$_REQUEST['address4']);
        
  $updateP = "UPDATE account SET address='$address', email='$email', telno='$telno', postcode='$postcode', address2='$address2',address3='$address3',address4='$address4' WHERE email='$email'";     
  $updateEXE = mysqli_query($conn, $updateP);
 

  if($updateEXE){
            echo "<script>";
            echo "alert('Butiran anda telah berjaya dikemaskini!');";
            echo 'alert ("Insert Success");';
         echo 'window.location.href="kk_public.php";' ;
            echo "</script>";
        }
        else{
            echo "<script>";
            echo "alert('Failed');";
            echo 'alert ("Insert Fail");';
            echo "</script>";
        }
  
  mysqli_close($conn);

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
	<title>BJB &mdash; Tempahan</title>
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
                                    <li><a href="portal_public.php">Halaman Utama</a></li>
                                  
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tempahan</a>
                                        <ul class="fh5co-sub-menu">
                                        <li><a  href="reservation_public.php">Senarai Tempahan</a></li>
                                        <li><a href="reserve_history_public.php">Sejarah Tempahan</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="contactus_user.php">Hubungi Kami</a></li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tetapan</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a class="active" href="kk_public.php">Profil</a></li>
                                            <li><a href="logout.php">Log Keluar</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header 
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/index_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<h2 class="text-center" style="color: white;">KemasKini Informasi Akaun Pengguna</h2<br><br>
					        	<a href="change_pwd_all.php" class="btn btn-primary btn-lg" style="color:black;" target="_blank" id="button">Tukar Kata Laluan</a>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/index_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
                                <h2 class="text-center" style="color: white;">KemasKini Informasi Akaun Pengguna</h2<br><br>
					        	<a href="change_pwd_all.php" class="btn btn-primary btn-lg" style="color:black;" target="_blank" id="button">Tukar Kata Laluan</a>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/index_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<h2 class="text-center" style="color: white;">KemasKini Informasi Akaun Pengguna</h2<br><br>
						        <a href="change_pwd_all.php" class="btn btn-primary btn-lg" style="color:black;" target="_blank" id="button">Tukar Kata Laluan</a>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		   		<li style="background-image: url(images/index_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<h2 class="text-center" style="color: white;">KemasKini Informasi Akaun Pengguna</h2<br><br>
					        	<a href="change_pwd_all.php" class="btn btn-primary btn-lg" style="color:black;" target="_blank" id="button">Tukar Kata Laluan</a>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside> -->

	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/bjb3.jpeg); background-size: cover;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
					   
						<h1 class="text-center">KemasKini Informasi Akaun Pengguna</h1<br><br>
						<a href="change_pwd_all.php" class="btn btn-primary btn-lg" style="color:black;" target="_blank" id="button">Tukar Kata Laluan</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
			    <form>
			     
			     <?php
                include_once("dbconfig.php");
                $email = $_SESSION["email"];
                
                $sql="SELECT * FROM profilepic WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();
            ?>
            
               <?php  echo "<tr><td><img src='" . $row["filepath"] . "'></td>";?>
			    </form><br>
			    <a href="changePublicProfilePic.php"><label>Kemaskini Gambar Profil</label></a>
			     <?php echo "<td><a href='deleteprofilepic.php?id=".$row['idpic']."'>Delete</a></td>"; ?><br>
			    <form method="POST" action="kk_public.php"  >
			        
			      
		 <?php
                include_once("dbconfig.php");
                $email = $_SESSION["email"];
                
                $sql="SELECT * FROM account WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();
            ?>
            
            <table>
                <tr>
                    <td><label>Nama Pengguna</label></td>
                    <td><input size="300" type="text" name="uname" value="<?php echo $row["username"]; ?>" disabled><br></td>
                </tr>
                <tr>
                    <td><label>Nama Sebenar</label></td>
                    <td><input type="text" name="name" value="<?php echo $row['fullname']; ?>" disabled><br></td>
                </tr>
                <tr>
                    <td><label>No. Kad Pengenalan</label></td>
                    <td><input type="text" name="ic" value="<?php echo $row['no_ic']; ?>" disabled><br></td>
                </tr>
                <tr>
                    <td><label>Tarikh Lahir</label><br></td>
                    <td><input type="date" name="DOB" value="<?php echo $row['DOB']; ?>" disabled><br><br><br></td>
                </tr>
            </table> 
    
            <!--Changeable area start from below-->
            <table>
                <tr>
                    <td><label>E-mel</label></td>
                    <td><input type="text" name="email" placeholder="cth: abc@gmail.com" value="<?php echo $row['email']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Tel no.</label></td>
                    <td><input type="text" name="telno" placeholder="0123456789" value="<?php echo $row['telno']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Alamat 1</label></td>
                    <td><input size="400" type="text" name="address" placeholder="No 11 Jalan Aman" value="<?php echo $row['address']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Alamat 2</label></td>
                    <td><input size="400" type="text" name="address2" placeholder="Taman Sg Aman" value="<?php echo $row['address2']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Poskod</label></td>
                    <td><input size="400" type="text" name="postcode" placeholder="812365" value="<?php echo $row['postcode']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Alamat 3</label></td>
                    <td><input size="400" type="text" name="address3" placeholder="Sg Petani Kedah" value="<?php echo $row['address3']; ?>" required><br></td>
                </tr>
                <tr>
                    <td><label>Alamat 4(blok)</label></td>
                    <td><input size="400" type="text" name="address4" placeholder="Nuri (Pastikan tiada kesalahn ejaan)" value="<?php echo $row['address4']; ?>" required><br></td>
                </tr>
            
            <!--Not necessary-->
                <tr>
                   <td><input type="submit" class ="viewmore" name="submit" value="KemasKini" > </td>
                </tr>
            
            </table>
        </div>
         </form>
			
			
				
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2020 Bangsa Johor Bahagia <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">Membertech</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
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