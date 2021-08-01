<?php 
    session_start(); 
    if(!isset($_SESSION["email"])){
        echo "<script>";
        echo "alert('Anda telah log keluar, sila log masuk semula.');";
        echo "location = 'index.php'";
        echo "</script>";
    }
?>
<html>
<head>
    <title>Tukar Kata Laluan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Log Masuk</title>
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

<link rel="stylesheet" href="css/_newstyle.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<?php
    include_once("dbconfig.php");

    if(isset($_POST["submit"])){ // If submit is triggered,
        $old_pwd = $n_pwd_1 = $n_pwd_2 = $email = "";

        $email = $_SESSION["email"];

        $old_pwd = mysqli_real_escape_string($conn,$_REQUEST['old_pwd']);
        $n_pwd_1 = mysqli_real_escape_string($conn,$_REQUEST['n_pwd_1']);
        $n_pwd_2 = mysqli_real_escape_string($conn,$_REQUEST['n_pwd_2']);

        $getAcc = "SELECT * FROM account WHERE email='$email'";   // Get info of the user
        $result = mysqli_query($conn,$getAcc);
        $row = mysqli_fetch_assoc($result);
        $pwd = $row['password'];

        if($pwd == $old_pwd){ // If old password is MATCHED with database

            if($n_pwd_1 === $n_pwd_2){ // If both new password are MATCHED, perform query!
                $updateAcc = "UPDATE account SET password='$n_pwd_1' WHERE email='$email'";
                $updateEXE = mysqli_query($conn,$updateAcc);

                if($updateEXE){
                    echo "<script>";
                    echo "alert('Kata Laluan Telah Berjaya Dikemaskini!');";
                    echo "window.close();";
                    echo "</script>";
                }
                else{
                    echo "<script>";
                    echo "alert('Failed');";
                    echo "location = 'change_pwd_all.php'";
                    echo "</script>";
                }
            }
            else{ // If old password is NOT matched
                echo "<script>";
                echo "alert('Sila pastikan kedua-dua Kata Laluan Baru adalah SAMA.');";
                echo "location = 'change_pwd_all.php'";
                echo "</script>";
            }
        }
        else{
            echo "<script>";
            echo "alert('Kata Laluan Lama Tidak Sama dengan Sistem. Sila Cuba Semula.');";
            echo "location = 'change_pwd_all.php'";
            echo "</script>";
        }
    }
?>
<body style="background: #002366">
<div id="fh5co-wrapper">
<div id="fh5co-page">
<div id="fh5co-header">
<header id="fh5co-header-section">
	<div class="container">
		<div class="nav-header">
		
			<h1 id="fh5co-logo" style="color:white"><a>Selamat Datang ke BJB</a></h1>
			
		</div>
	</div>
</header>

</div>
<!-- end:fh5co-header  
class="fh5co-parallax" style="background: linear-gradient(to right,rgb(71, 71, 230) , rgb(216, 57, 57));" data-stellar-background-ratio="0.5"-->
<div>

<div class="overlay"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
			<div class="fh5co-intro fh5co-table-cell">
				 


<!--Banner-->
    

<!--Content Start Here-->
    <br><br>
    <form action="change_pwd_all.php" method="POST" >
    <center>    
    
            <?php
                include_once("dbconfig.php");
                $username = $_SESSION["email"];
            ?>
            <style>
	            td, th{
	                color: black;
	                padding: 5px;
	                column-width: 999px;
	            }
	        </style>
            <table class="box">
            <tr>
                <td colspan="2"><br><center><h2>Tukar Kata Laluan</h2></center></td>
            </tr>
            <tr>
                <td><label>Email Pengguna</label></td>
                <td><input size="200" type="text" name="email" value="<?php echo $_SESSION["email"]; ?>" disabled><br></td>
            </tr>
            <tr>
                <td><label>Kata Laluan Lama</label></td>
                <td><input type="password" name="old_pwd" placeholder="kata laluan lama" required></td>
            </tr>
            <tr>
                <td><label>Kata Laluan Baru</label></td>
                <td><input type="password" name="n_pwd_1" placeholder="kata laluan baru" required></td>
            </tr>
            <tr>
                <td><label>Taip Semula Kata Laluan Baru</label></td>
                <td><input type="password" name="n_pwd_2" placeholder="kata laluan baru" required></td>
            </tr>
            <tr>
                <td colspan="2"><center>
                    <input type="submit" name="submit" value="KemasKini" id="reg_btn"></center>
                    <br>
                    <center><h5><a type="submit" href=login.php size="50" class="btn btn-primary btn-lg" id="reg_btn">Balik</a></h5></center>
                </td>
            </tr>
            </table>
            
    </center>
    </form>
<!-- End-->
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
    

    </div>

</body>
</html>