<?php
        session_start(); // start session
        
        if(isset($_POST['login'])){
            include_once ("dbconfig.php");

            $email = $password = "";

            $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
            $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
            $query = "SELECT * FROM account WHERE email='$email'AND password='$password' ";

            $sql = mysqli_query($conn, $query);
            $result = mysqli_fetch_assoc($sql);

            if(mysqli_num_rows($sql) == 0){
                echo "<script>";
                echo "alert('Email atau kata laluan tidak betul');";
                echo "location = 'login.php'";
                echo "</script>";
            }
            else if(mysqli_num_rows($sql) == 1){
                
                $_SESSION["email"] = $result['email'];
                $_SESSION["role"] = $result['role'];
                
                if($_SESSION['role'] =='admin'){
                    header("Location:portal_admin.php");
                }
                 else if($_SESSION['role'] =='resident'){
                    header("Location:portal_residen.php");
                }
                else if($_SESSION['role'] =='public'){
                    header("Location:portal_public.php");
                }
                
            }
        }
?>

<html class="no-js"> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Log Masuk</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="css/_newstyle.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body style="background-image: url(images/johor3.jpg);" >
<div id="fh5co-wrapper">
<div id="fh5co-page">
<div id="fh5co-header">
<header id="fh5co-header-section">
	<div class="container">
		<div class="nav-header">
			<h1 id="fh5co-logo"><a style="color:black" href="index.php">Selamat Datang ke BJB</a></h1><br><br>
		</div>
	</div>
</header>

</div>
<!-- end:fh5co-header -->
<div>
<!--class="fh5co-parallax" style="background: linear-gradient(to right,rgb(71, 71, 230) , rgb(216, 57, 57));" data-stellar-background-ratio="0.5"-->
<div class="overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
			<div class="fh5co-intro fh5co-table-cell">
				 

<form class="box" action="signup.php" method="POST">
	<br><br><br>
	<h2>Seksyen 1: Informasi Peribadi</h2>
	<style>
	    td, th{
	        height: 100%;
	        color: black;
	        padding: 10px;
	        column-width: 999px;
	    }
	</style>
	<table>
	    <tr>
	        <td><label> Nama</label></td>
            <td><input size="300" type="text" name="fullname" placeholder="Nama Sebenar" required></td>
	    </tr>
	    <tr>
	        <td><label>Nombor IC/ Passport</label></td>
            <td><input type="text" name="no_ic" placeholder="Nombor kad pengenalan" pattern="[0-9]{12}" required></td>
	    </tr>
	    <tr>
            <td><label>Nama Pengguna Baru</label></td>
            <td><input type="text" name="n_username" placeholder="Username" required><br></td>
        </tr>
        <tr>
            <td><label>Tel no. Peribadi</label></td>
            <td><input type="text" name="telno" placeholder="No. Telefon"  required><br></td>
        </tr>
	    <tr>
	        <td><label>Alamat 1</label></td>
            <td><input type="text" name="address" placeholder="Contoh: No.1 Jalan Sutera" required></td>
        </tr>
        <tr>
	        <td><label>Alamat 2</label></td>
            <td><input type="text" name="address2" placeholder="Contoh: Taman Sg Abong" required></td>
        </tr>
        <tr>
            <td><label>Poskod</label></td>
            <td><input type="text" name="postcode" placeholder="Contoh: 84000"  required><br></td>
        </tr>
	    <tr>
	        <td><label>Alamat 3</label></td>
            <td><input type="text" name="address3" placeholder="Contoh: Muar Johor" required></td>
        </tr>
        <tr>
            <td><label for="address4">Alamat 4 (blok)</label></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <select id="address4" name="address4" required>
                    <option value="pilih">--sila pilih satu--</option>
                    <option value="merak">Merak</option>
                    <option value="jentayu">Jentayu</option>
                    <option value="kenari">Kenari</option>
                    <option value="nuri">Nuri</option>
                </select>
            </td>
        </tr>
    </table>
        
    <h2 align="center"><br>Seksyen 2: Emel & Kata laluan</h2>
    <table>
        <tr>
            <td><label>E-mel</label></td>
            <td><input size="300"type="email" name="email" placeholder="Contoh: abc@gmail.com" required></td>
        </tr>
        <tr>
            <td><label>Kata Laluan Baru</label></td>
            <td><input type="password" name="n_pwd_1" placeholder="Kata Laluan" required></td>
        </tr>
        <tr>
            <td><label>Taip Semula Kata Laluan Baru</label></td>
            <td><input type="password" name="n_pwd_2" placeholder="Taip Semula Kata Laluan" required></td>
        </tr>
        <tr>
            <td><label for="role">Peranan:</label></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <select id="role" name="role" required>
                    <option value="pilih">--sila pilih satu--</option>
                    <option value="public">Orang Awam</option>
                    <option value="resident">Penduduk</option>
                </select>
            </td>
        </tr>
    </table>
        <input type="submit" name="submit" value="Hantar" id="reg_btn">
</form>

</div>
</div>

<!-- End-->
			</div>
		</div>
	</div>
</div>
</div>

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
                $postcode = mysqli_real_escape_string($conn, $_REQUEST['postcode']);
                $address2 = mysqli_real_escape_string($conn, $_REQUEST['address2']);
                $address3 = mysqli_real_escape_string($conn, $_REQUEST['address3']);
                $address4 = mysqli_real_escape_string($conn, $_REQUEST['address4']);
                $new_username = mysqli_real_escape_string($conn, $_REQUEST['n_username']);
                $new_password = mysqli_real_escape_string($conn, $_REQUEST['n_pwd_1']);
                $role = mysqli_real_escape_string($conn, $_REQUEST['role']);
                
                // Insert data into table "po"
                $sql1 = "INSERT INTO account(no_ic, username, fullname, email, telno, postcode, address, address2, address3, address4, role,password) VALUES ('$ic','$new_username','$name','$email', '$telno', '$postcode','$address','$address2','$address3','$address4','$role','$new_password')";
    

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