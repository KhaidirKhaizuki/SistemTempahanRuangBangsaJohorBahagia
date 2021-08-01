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
            <!--<div class="wrap">-->

            <div class="container">

                <div class="row">

                    <div class="container-fluid">


                        <div class="col-sm-8">
                            <div class="box_1">
                                <div class="form-field">
                                    <form action="portal_residen.php" method="GET">
                                        <input type="text" name="searchValue" placeholder="contoh: Dewan...">
                                        <br><br>
                                        <button class="btn btn-primary btn-luxe-primary text-left" name="submit">Cari <i
                                                class="ti-angle-right"></i></button>
                                </div>
                            </div>
                            </form>
                            <br>
                            <div class="box_1">
                                <?php
                    include_once("dbconfig.php");
                   

                    if(isset($_GET['searchValue'])){    // Search activity
                        $term = "";
                        $term = $_GET['searchValue'];
                
                        if($term != ""){    // term is specified
                            $sql="SELECT * FROM space WHERE status ='ada' AND name LIKE '%".$term."%'";
                        }
                        else{   // no term is specified
                            $sql="SELECT * FROM space WHERE status  ='ada'";
                        }
                    }
                    else{
                        $sql="SELECT * FROM space WHERE status  ='ada'";
                    }

                    $result= mysqli_query($conn, $sql);
                    $num =$result->num_rows;

                    if($num > 0){

                        
                        while($row=$result->fetch_assoc()){
                            echo "<br><div><h2>".$row['name']."</h2></div>";
                            echo "<div><img src='" . $row["filepath"] . "' height='200' width='262'></div>";
                            echo " <div>RM ".$row['price_resident']." sehari </div>";
                            echo "<div> Blok ".$row['block']."</div>";
                            echo "<div>Kapasiti: ".$row['capacity']." orang </div>";?>

                                <div>
                                <a href="make_reservation_resident.php?sid=<?php echo $row['space_id']; ?>" class="viewmore">Tempah</a>
                                    
                                </div><?php
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<tr><td><center>Tiada data berdasarkan carian </center></td></tr>";
                        echo "</table>";
                    }
                
                    ?>
                            </div>
                            <br>

                            <div class="f2-hotel">
                                <div class="desc">
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <h3>Makluman</h3>
                            <ul>
                                <li>Kami sedia membantu untuk tempahan dewan, gelanggang, kolong dan homestay</li>
                                <li>Bayaran penuh perlu dijelaskan dalam tempoh 7 hari sebelum penggunaan untuk
                                    mengelakkan pembatalan.</li>
                                <li>Sila berhubung dengan kakitangan BJB di talian 07 551 2345/2347 untuk
                                    keterangan lanjut.</li>

                            </ul>


                            <div class="desc">
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
					<script src="https://wchat.freshchat.com/js/widget.js"></script>
<script>
  window.fcWidget.init({
    token: "d91c0f16-c4d6-4ad2-93a6-ed5411c121f8",
    host: "https://wchat.freshchat.com",
    config: {
      disableEvents: true,
      cssNames: {
        widget: 'fc_frame',
        open: 'fc_open',
        expanded: 'fc_expanded'
      },
      showFAQOnOpen: true,
      hideFAQ: true,
      agent: {
        hideName: false,
        hidePic: false,
        hideBio: false,
      },
      headerProperty: {
	      //If you have multiple sites you can use the appName and appLogo to overwrite the values.
      	appName: 'Gadget God',
        appLogo: 'https://d1qb2nb5cznatu.cloudfront.net/startups/i/2473-2c38490d8e4c91660d86ff54ba5391ea-medium_jpg.jpg?buster=1518574527',
        backgroundColor: '#FFFF00',
        foregroundColor: '#333333',
        backgroundImage: 'https://wchat.freshchat.com/assets/images/texture_background_1-bdc7191884a15871ed640bcb0635e7e7.png'
      },
      content: {
        placeholders: {
          search_field: 'Search',
          reply_field: 'Reply',
          csat_reply: 'Add your comments here'
        },
        actions: {
          csat_yes: 'Yes',
          csat_no: 'No',
          push_notify_yes: 'Yes',
          push_notify_no: 'No',
          tab_faq: 'Solutions',
          tab_chat: 'Chat',
          csat_submit: 'Submit'
        },
        headers: {
          chat: 'Chat with Us',
          chat_help: 'Reach out to us if you have any questions',
          faq: 'Solution Articles',
          faq_help: 'Browse our articles',
          faq_not_available: 'No Articles Found',
          faq_search_not_available: 'No articles were found for {{query}}',
          faq_useful: 'Was this article helpful?',
          faq_thankyou: 'Thank you for your feedback',
          faq_message_us: 'Message Us',
          push_notification: 'Don\'t miss out on any replies! Allow push notifications?',
          csat_question: 'Did we address your concerns??',
          csat_yes_question: 'How would you rate this interaction?',
          csat_no_question: 'How could we have helped better?',
          csat_thankyou: 'Thanks for the response',
          csat_rate_here: 'Submit your rating here',
          channel_response: {
            offline: 'We are currently away. Please leave us a message',
            online: {
              minutes: {
                one: "Currently replying in {!time!} minutes ",
                more: "Typically replies in {!time!} minutes"
              },
              hours: {
                one: "Currently replying in under an hour",
                more: "Typically replies in {!time!} hours",
              }
            }
          }
        }
      }
    }
  });
</script>

</body>

</html>