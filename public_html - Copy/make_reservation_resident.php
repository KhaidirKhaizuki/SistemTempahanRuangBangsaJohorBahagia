<?php 
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
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BJB &mdash; Portal Residen</title>
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
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
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
    <link rel="stylesheet" href="css/reserveuser.css">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

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
                                    <li><a class="active" href="portal_residen.php">Halaman Utama</a></li>
                                  
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tempahan</a>
                                        <ul class="fh5co-sub-menu">
                                        <li><a href="reservation_residen.php">Senarai Tempahan</a></li>
                                        <li><a href="reserve_history_residen.php">Sejarah Tempahan</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="contactus_user.php">Hubungi Kami</a></li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tetapan</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="kk_residen.php">Profil</a></li>
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
            <div class="fh5co-parallax" style="background-image: url(images/bjb2.jpg);">
                
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <h1 class="text-center">Selamat Datang</h1> <?php echo $_SESSION["email"]; ?> <br>
            <a href="kk_residen.php" id="kk_btn">Kemaskini Akaun</a>
                                

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="container">

                <div class="row">
                <div class="col-sm-12">
                <div class="box_1">

                <h3>Perhatian</h3>
                            <ul>
                <li><b>Sila semak kalendar terlebih dahulu sebelum membuat tempahan untuk mengelakkan pertindihan tarikh</b></li>
                                

                            </ul>
</div><br></div>

                  
                    <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKuala_Lumpur&amp;src=bWVtYmVydGVjaDk5QGdtYWlsLmNvbQ&amp;src=ZW4ubWFsYXlzaWEjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043" style="border:solid 1px #777" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
<br>
<div class="container-fluid">
                        <div class="col-sm-6">
                            <?php
                        include_once("dbconfig.php");
    
                        if(isset($_GET['sid'])){ // Get details of the particular space
                            $sid = $_GET['sid'];
                            $_SESSION["space_id"] = $sid;
                            
                            $sql = "SELECT * FROM space WHERE space_id=$sid";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                            
                            $name = $description = $category = $block = $capacity = $price_resident = $filepath =  "";
                            $name = $row['name'];
                            $description = $row['description'];
                            $category = $row['category'];
                            $block = $row['block'];
                            $capacity = $row['capacity'];
                            $price_resident = $row['price_resident'];
                            $filepath = $row['filepath'];
                           
                        }
    
                                        ?>
<?php
                            echo "<div><h1><font color=blue>".$row['name']."</font></h1></div>";
                           echo "<div><h4>Kadar &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp RM ".$row['price_resident']." sehari </h4></div>";
                            echo"<hr>";
                            
                            echo "<div> Blok ".$row['block']."</div>";
                            echo "<div> Makluman: ".$row['description']."</div>";
                            echo "<div>Kapasiti: ".$row['capacity']." orang </div>";   
                             echo "<div> Kategori: ".$row['category']."</div>";
                            echo "<div><img src='" . $row["filepath"] . "'></div>";?>
                            <br>
                            <div class="f2-hotel">
                            <div class="desc">
                            </div>
                            </div>
                        </div>

<!-------------------------------------------RIGHT LAYOUT--------------------------------------------->
<br>                       
<div class="col-sm-6">
            
                            <div class="box_2">
                                <h3>Maklumat Tempahan</h3>
                                <form action="make_reservation_resident.php" method="POST">
                                <input type="hidden" name="sid" value="<?php echo $sid; ?>">
                                <br>
                                <label >Tujuan</label>
                                <br>
                                <select class="form-control" name="tujuan">
                                <option value="" disabled selected>Tujuan</option>
                                <option value="bengkel"required>Bengkel/Seminar</option>
                                <option value="sukan"required>Bersukan</option>
                                <option value="perkahwinan"required>Majlis Perkahwinan</option>
                                <option value="mesyuarat"required>Mesyuarat</option>
                                <option value="homestay"required>Penginapan</option>
                                </select>
                                <br>
                                <label>Dari</label>
                                <br>
                                <input type="date" name="start_date"><br>

                                <label>Masa Mula</label>
                                <br>
                                <input type="time" name="start_time">
                                <br><br>

                                <label>Hingga</label>
                                <br>
                                <input type="date" name="end_date"><br>

                                <label>Masa Tamat</label>
                                <br>
                                <input type="time" name="end_time">
                                <div>
                                <div>
                                
                                <input type="submit" name="submit" class="viewmore" value="Hantar">
                                    
                                </div>
                                
                                <?php
                                 include_once ("dbconfig.php");
                            if(isset($_POST['submit'])){
                              
       $tujuan = $startD = $startT = $endD = $endT = $email= $fullname = $telno= $role= $space_id="";
        
       $getPublic = "SELECT fullname,telno, role FROM account WHERE email='".$_SESSION["email"]."'";
       $fetchPublic = mysqli_query($conn, $getPublic);
       $arr = mysqli_fetch_assoc($fetchPublic);
        //Set all variables
        $space_id = $_REQUEST['sid'];
        $email = $_SESSION["email"];
        $fullname = $arr["fullname"];
        $telno =$arr['telno'];
        $role = $arr ['role'];
        $tujuan = $_POST['tujuan'];
        $startD = $_REQUEST['start_date'];
        $startT = $_REQUEST['start_time'];
        $endD = $_REQUEST['end_date'];
        $endT = $_REQUEST['end_time'];

        
        if($startD > $endD){    // Cannot tolerate if end_date is earlier than start_date
            echo "<script>";
            echo "alert('Tarikh Bermula dan Habis tidak logik!');";
            echo "</script>";
        }
        else{
            $insert = "INSERT INTO reservation( space_id, email, fullname, telno, role, tujuan, start_date, start_time, end_date, end_time,status, komen) 
            VALUES ('$space_id','$email','$fullname','$telno','$role','$tujuan','$startD','$startT','$endD','$endT','Dalam Permohonan', '' )";
        
            $result2 = mysqli_query($conn, $insert);
            
            if($result2){
                echo "<script>";
                echo "alert('Permohonan telah berjaya dihantar. Sila tunggu maklum balas dari admin');";
                echo "location = 'portal_residen.php'";
                echo "</script>";
            }
            else{
                echo "Failed";
            }
        }
    }
?>
                                    
                                </div>
                            </div>
                            <div class="desc">

<br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer" class="fh5co-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="copyright">
                        <p><small>&copy; 2020 Bangsa Johor Bahagia <br> All Rights Reserved. <br>
                                Designed by <a href="http://freehtml5.co" target="_blank">Membertech</a> <br> Demo
                                Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
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