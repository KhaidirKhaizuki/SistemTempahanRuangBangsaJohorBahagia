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
    background-color:  rgb(247, 237, 237);
}
</style>
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
           
            <!-- end:fh5co-header -->
           

            <br><br>

            <div class="container">

                <div class="row">

                    <div class="container-fluid">

                        <div class="col-sm-12">
                     
                        <?php   
include "dbconfig.php";
if(isset($_GET['rid'])){ // Get details of the particular reservation
    $rid = $_GET['rid'];
    $_SESSION["reserve_id"] = $rid;

    $sql2 = "SELECT * FROM reservation WHERE reserve_id=$rid";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_array($result2);
    
}

    ?>          
                        
<!-------------------------------bottom---------------------------------------------------------->

<div class="box_2">
 
    <h2>Buat Pembayaran Anda</h2>
    <style>
                   label,td{
                    color: black;
                    }
                    </style>
    <hr>
   
    <div>
        <form action="transaction_residen.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="rid" value="<?php echo $rid; ?>">
      
                    <br>
                    <label>No Akaun Penerima</label><br>
                    <input type="text" name="accno" class="form-control" value="7625398614" disabled>
                    <br>
                    <label>Nama Bank </label><br>
                    <input type="text" name="bank" class="form-control" value="CIMB" disabled>
                            <br>
                   
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Rujukan</label>
                        <textarea class="form-control" name="rujukan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                                    
                    <br>
                    <label>Bukti Pembayaran</label>
                    <br>
                    <label>Muatnaik Screeenshot Online Transaksi Anda <input type="file" name="pic" id="pic"></label>
    <br><br>
        

            <!-- Buttons -->
            <div class="button-container">
                <div>
                    <input type="submit" class="viewmore" name="submit" id="same" value="Hantar">
            
                    <input type="reset" class="viewmore" id="same" onclick="resett()" value="Set Semula">
            
                    <a href="reservation_public.php">
                        <input type="button" class="viewmore" id="same" value="Kembali">
                    </a>
                </div>
        </div>
            <!-- Buttons END -->
        </form>
    </div>
    
</body>
</html>

<?php
 include "dbconfig.php";
        if (isset($_POST['submit'])){ 
       
        $rujukan = $filename =$filepath =$email =$role= $date= $time = $reserve_id="";
        
        $getPublic = "SELECT role FROM account WHERE email='".$_SESSION["email"]."'";
        $fetchPublic = mysqli_query($conn, $getPublic);
        $arr = mysqli_fetch_assoc($fetchPublic);

        $reserve_id = $_REQUEST['rid'];
        $email = $_SESSION["email"];
        $role = $arr ['role'];
        $date = date("Y-m-d");
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $time = date("h:i:s");
        $rujukan = $_POST['rujukan'];         
        $target_dir = "images/";
        if (is_uploaded_file($_FILES['pic']['tmp_name'])){
            $filepath = $target_dir . basename($_FILES["pic"]["name"]);
            $filename = basename($_FILES["pic"]["name"]);
        }
                    
        else{
            $filepath = $target_dir . "no-image.png";
            $filename = "none";
        }   
                    
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($filepath,PATHINFO_EXTENSION));

        $sql = mysqli_query($conn, "INSERT INTO transaksi( reserve_id, email, role, trans_date, trans_time, rujukan, filename, filepath)
                                    VALUES ('$reserve_id','$email','$role','$date', '$time','$rujukan', '$filename', '$filepath')");

        // Check if image file is a actual image or fake image
        if (is_uploaded_file($_FILES['pic']['tmp_name'])) {
            $check = getimagesize($_FILES["pic"]["tmp_name"]);

            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 

            else {
                echo "File is not an image.";

                $uploadOk = 0;
            }
        
            // Check if file already exists
            if (file_exists($filepath)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["pic"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
                echo "Sorry, your file was not uploaded.";

            else {
                if (move_uploaded_file($_FILES["pic"]["tmp_name"], $filepath)) {
                    echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
                } 

                else
                    echo "Sorry, there was an error uploading your file.";            
            }
        }

        if ($sql){
            echo "<script>";
            echo "alert('Pembayaran telah berjaya.');";
            echo "location='reservation_residen.php';";
            echo "</script>";
        }
            
        else{
            echo "<script>";
            echo "alert('Transaksi gagal. Sila cuba lagi sekali');";
            echo "location = 'transaction_residen.php';";
            echo "</script>";
        }

        mysqli_close($conn);
    }
?>                      
                              
                              

                            <div class="f2-hotel">
                            <div class="desc">
                            </div>
                            </div>
                        </div>
                        <br><br><br>

<!-------------------------------------------RIGHT LAYOUT--------------------------------------------->
                        <div class="col-sm-6">
                        
                            
                                    
                                </div>
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