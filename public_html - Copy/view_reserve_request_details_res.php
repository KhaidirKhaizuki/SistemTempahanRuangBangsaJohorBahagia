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
    <title>BJB &mdash; Portal Admin</title>
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
    <style>
body  {
    background-color: rgb(247, 237, 237);
}
</style>
</head>


<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
        

            <br><br>
            <!--<div class="wrap">-->

            <div class="container">

                <div class="row">

                    <div class="container-fluid">

                        <div class="col-sm-12">
                        <div class="box_2">
                        <a href="view_reserve_request_resident.php "target="blank"><img src="images\arrow.png" height="20px"></a>
                        <h2>Butiran Maklumat Tempahan</h2>
                                <hr>
                                <?php
                            include_once("dbconfig.php");
                           

                    if(isset($_REQUEST['rid'])){
                        $id = "";
                        $id = $_GET['rid'];
                        echo $id; // can't get id

                        $sql = "SELECT * FROM reservation WHERE reserve_id=$id "; // Get reserve details
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        $sid = $row['space_id'];
                        
                        $getspace = "SELECT * FROM space WHERE space_id='$sid'"; // Get specific space
                        $result2 = mysqli_query($conn, $getspace);
                        $row2 = mysqli_fetch_array($result2);
                        
                    }?>
                
                    <style>
                    label,table, th, td {
                    border: 0px solid black;
                    color: black;
                    }

                    table {
                    width: 50%;
                    }
                    </style>
                    <table >
                    <tr>
                    <td><b>Nama</td>
                    <td><?php echo $row['fullname']; ?></td>
                    </tr>
                    <br>
                    <tr>
                    <td><b>No Telefon</td>
                    <td><?php echo $row['telno']; ?></td>
              </tr>
                     <br>
                    <tr>         
                    <td><b>Email</td>
                    <td><?php echo $row['email']; ?></td>
              </tr>
    
       
      <tr>
        <td><b>Nama tempat yang ditempah</td>
        <td><?php echo $row2['name']; ?></td>
      </tr>
      <tr>
      <td><b>Perbadanan</td>
     <td><?php echo $row2['block']; ?></td>
      </tr>
      <tr>
      <td><b>Harga </td>
        <td>RM <?php echo $row2['price_resident']; ?></td>
      </tr>
      <tr>
      <td><b>Dari/Masa</td>
    <td><?php echo $row['start_date']; ?> &nbsp <?php echo $row['start_time']; ?></td>
      </tr>
      <tr>
      <td><b>Hingga/Masa</td>
    <td><?php echo $row['end_date']; ?> &nbsp <?php echo $row['end_time']; ?></td>
      </tr>

  </table>
  <form action="view_reserve_request_details_res.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="rid" value="<?php echo $id; ?>">


  <br>
        <label>Status</label><br>
        <select  class="form-control" name="status">
        <option value="blank">--Sila pilih disini--</option>
        <option value="Lulus">Lulus</option>
        <option value="Batal">Batal</option>
        </select></>
        <br>
    
      <label>Nyatakan sebab</label>
          <textarea class="form-control" name="komen" placeholder="sebab..." column="25" rows="3" value= "<?php echo $row['komen']; ?>"></textarea>

     
     <br><br>
 <!-- Buttons -->
 <div class="button-container">
                <div>
                    <input type="submit" class="viewmore" name="submit" id="same" value="Hantar">
            
                    <input type="reset" class="viewmore" id="same" onclick="resett()" value="Set Semula">
            
                    <a href="view_reserve_request_resident.php">
                        <input type="button" class="viewmore" id="same" value="Kembali">
                    </a>
                </div>
        </div>
                             
            <!-- Buttons END -->
 <?php
  if(isset($_POST['submit'])){ // If admin approve / reject
    include_once("dbconfig.php");
     
    $sql="UPDATE reservation
    SET status='".$_POST["status"]."',
    komen='".$_POST["komen"]."'
    WHERE reserve_id='".$_POST["rid"]."'";
    $result = mysqli_query($conn, $sql);
            
            if($result){
                echo "<script>";
                echo "alert('Permohonan telah dikemaskini!');";
                echo "location = 'view_reserve_request_resident.php'";
                echo "</script>";
            }
            else{
                echo "Failed";
            }
        
        }
?>
         
</div>

                            <div class="desc">
<br>
                            </div>
                        </div>
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

</html>