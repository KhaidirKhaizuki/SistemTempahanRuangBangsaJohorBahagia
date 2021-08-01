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
                                    <li><a href="portal_public.php">Halaman Utama</a></li>
                                  
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tempahan</a>
                                        <ul class="fh5co-sub-menu">
                                        <li><a href="reservation_public.php">Senarai Tempahan</a></li>
                                        <li><a class="active" href="reserve_history public.php">Sejarah Tempahan</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="contactus_user.php">Hubungi Kami</a></li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Tetapan</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="kk_public.php">Profil</a></li>
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
            <div class="fh5co-parallax" style="background-image: url(images/bjb.JPG);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <h1 class="text-center">Sejarah Tempahan</h1> <?php echo $_SESSION["email"]; ?> <br>
            <a href="kk_public.php" id="kk_btn">Kemaskini Akaun</a>
                                

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
                        <h2>Sejarah Tempahan</h2>
                        <div class="box_1">
                                <div class="form-field">
                                    <form action="reserve_history_public.php" method="POST">
                                        <input type="text" name="searchValue" placeholder="contoh: Ruang...">
                                        <br><br>
                                        <button class="btn btn-primary btn-luxe-primary text-left" name="submit" >Cari <i
                                                class="ti-angle-right"></i></button>
                            </div>
                            </div>
                            </form>
                            <br>
   <!-----------------------------------VIEW DATA ------------------------------------->
    <?php
       include_once("dbconfig.php");
       if(isset($_POST['searchValue'])){    // Search activity
           $term = "";
           $term = $_POST['searchValue'];
   
           if($term != ""){    // term is specified
            $sql2 ="SELECT r.reserve_id,r.fullname,r.telno, r.email, r.role, 
            s.name,s.block,s.price_public,s.description,r.start_date,r.start_time,
            r.end_date,r.end_time, t.filepath , t.trans_date, t.trans_time
            FROM space s , reservation r , transaksi t
            WHERE s.space_id = r.space_id
            AND r.reserve_id = t.reserve_id
            AND r.email='".$_SESSION["email"]."'
             AND s.name LIKE '%".$term."%'
             ORDER BY r.start_date;";
           }
           else{   // no term is specified
            $sql2 ="SELECT r.reserve_id,r.fullname,r.telno, r.email, r.role, 
            s.name,s.block,s.price_public,s.description,r.start_date,r.start_time,
            r.end_date,r.end_time, t.filepath , t.trans_date, t.trans_time
            FROM space s , reservation r , transaksi t
            WHERE s.space_id = r.space_id
            AND r.reserve_id = t.reserve_id
            AND r.email='".$_SESSION["email"]."'
            ORDER BY r.start_date;";
           }
       }
       else{
        $sql2 ="SELECT r.reserve_id,r.fullname,r.telno, r.email, r.role, 
        s.name,s.block,s.price_public,s.description,r.start_date,r.start_time,
        r.end_date,r.end_time, t.filepath , t.trans_date, t.trans_time
        FROM space s , reservation r , transaksi t
        WHERE s.space_id = r.space_id
        AND r.reserve_id = t.reserve_id
        AND r.email='".$_SESSION["email"]."'
        ORDER BY r.start_date;";
       }
  
     
   
        
            $result = mysqli_query($conn,$sql2);
            $num =$result->num_rows;
          
            if($num > 0){
               
                echo "<table class='table table-striped table-hover'>
                        <tr>
                            <th> Bil </th>
                            <th>Ruang</th>
                            <th>Tarikh Bayaran</th>
                            <th>Tindakan</th>
                        </tr>";
                $sr=1; 
                while($row=$result->fetch_assoc()){
                echo "<tr><td>".$sr."</td>";
                echo("<td><b>" . $row['name'] . "\n" .
                "<br />\n </b>" .$row['start_date'] . "\n" . 
                "<br />\n </b>" .$row['start_time'] . "\n" . "</td>\n");
                echo("<td>" . $row['trans_date'] . "\n" .
                "<br />\n </b>" .$row['trans_time'] . "\n" . "</td>\n");?>
                                   

 

<!---------------------------------------Button (view) trigger ---------------------------------->
<td>            
<button type="button" class="view" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['reserve_id'];?>">
  Lihat
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $row['reserve_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Senarai</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p> Nama Pengguna<?php echo":<br>". $row['fullname'].""; ?></p>
       <p> No Telefon<?php echo   ":<br> ". $row['telno'].""; ?></p>
       <p> Email<?php echo        ":<br> ". $row['email'].""; ?></p>
       <p> Ruang<?php echo        ":<br> ". $row['name'].""; ?></p>
       <p> Perbadanan<?php echo   ":<br> ".$row['block'].""; ?></p>
       <p> Harga<?php echo        ":<br> RM ".$row['price_public'].""; ?></p>
       <p> Penerangan<?php echo  ":<br> ".$row['description'].""; ?></p>
       <p> Dari<?php echo ":<br> ".$row['start_date'].""; ?></p>
       <p> Masa<?php echo ":<br> ".$row['start_time'].""; ?></p>
       <p> Hingga<?php echo ":<br> ". $row['end_date'].""; ?></p>
       <p> Masa<?php echo ":<br> ".$row['end_time'].""; ?></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="view" data-dismiss="modal">Tutup</button>
       
      </div>
    </div>
  </div>
</div>                    
<!---------------------------------------button delete trigger---------------------------------------------->
                    <a  href="reserve_history_public.php?delete=<?php echo $row['reserve_id'];?>" class ="padam" name ="delete" onclick="return confirm
                     ('Anda pasti untuk padam tempahan ini?')")>Padam</a>
                
                            </td>
                 <?php
                 $sr++;
                 ?>
                            <?php
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<tr><td><center>Tiada pembayaran pada masa ini</center></td></tr>";
                        echo "</table>";
                    }
                ?>
<!-----------------------------------DELETE DATA----------------------------------------->
                <?php
                      include_once("dbconfig.php");
                      if(isset($_GET['delete'])){    
                          $reserve_id= $_GET['delete'];
                          $delete = "DELETE FROM reservation WHERE reserve_id = '$reserve_id'" ;
                         $result = mysqli_query($conn, $delete);
                         
                         $select = "SELECT * FROM transaksi WHERE reserve_id=$reserve_id"; //delete from transaksi if exist
                         $result2 = mysqli_query($conn, $select);
                         
                         if($result2){   //delete from transaksi if exist
                             $delete = "DELETE FROM transaksi WHERE reserve_id=$reserve_id";
                             $result = mysqli_query($conn, $delete);
                             
                        echo "<script>";
                        echo "alert('Tempahan ini telah dipadam!');";
                        echo "location = 'reserve_history_public.php'";
                        echo "</script>";
                            
                         } else {
                             echo "Error deleting record: " . $conn->error;
                         }
                     }
                     ?>
   
</div>
        
</div> 
              </div>       
   
                            <div class="f2-hotel">
                            <div class="desc">
                            </div>
                            </div>
                   
                        <br>
  
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
                        <p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
                                Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo
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
    <script type="text/javascript">
  function form_submit() {
    document.getElementById("search_form").submit();
   }    
  </script>

</body>

</html>