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
// Set your timezone
date_default_timezone_set('Asia/Kuala_Lumpur');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today
$today = date('Y-m-j', time());

// For H3 title
$html_title = date('Y / m', $timestamp);

// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);
 
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);


// Create Calendar!!
$weeks = array();
$week = '';

// Add empty cell
$week .= str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">     
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <style>
        h3 {
            margin-bottom: 30px;
        }

        th {
            height: 30px;
            text-align: center;
        }

        td {
            height: 100px;
        }

        .today {
            background: orange;
        }

        th:nth-of-type(1),
        td:nth-of-type(1) {
            color: red;
        }

        th:nth-of-type(7),
        td:nth-of-type(7) {
            color: blue;
        }
    </style>
    <style> 
    /* class applies to select element itself, not a wrapper element */
.select-css {
  display: block;
  font-size: 12px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 15%;
  max-width: 15%; /* useful when width is set to anything other than 100% */
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
    
  */
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
  background-repeat: no-repeat, repeat;
  /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
  background-position: right .7em top 50%, 0 0;
  /* icon size, then gradient */
  background-size: .65em auto, 100%;
}



body {
  margin: 2rem;
}
 input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #ABD7EB;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"
        src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                    <li><a class="active" href="portal_admin.php">Halaman Utama</a></li>
                                    <li><a href="managespace.php">Ruang</a></li>
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
            <div class="fh5co-parallax" style="background-image: url(images/bjb2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">

                            <h1 class="text-center">Selamat Datang</h1> <?php echo $_SESSION["email"]; ?> <br>
            <a href="kk_admin.php" id="kk_btn">Kemaskini Akaun</a>
                                <!--<a href="kk_admin.php" id="kk_btn">Kemaskini Akaun</a>-->
<center><form method="POST" action="">


<td><input type="text" name="searchstring" size="5"></td>
<td><select size="1" name="searchtype" class="select-css">
<option selected value="space_id">ID No</option>
<option selected value="name">Nama Fasiliti</option>
<option value="category">Kategori Fasiliti</option>
</select></td>


<p><input type="submit" value="Cari" name="B1" color="blue"></p>
</form></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-services-section">
                <div class="container">
                    <div class="row">
                <center>        <?php
include "dbconfig.php";
if (isset($_POST["searchstring"])){
	$searchstring = $_POST["searchstring"];
	$searchtype =$_POST["searchtype"];
}

if (isset($searchstring))
{
$sql="SELECT space_id,name,category FROM space WHERE $searchtype LIKE '%$searchstring%' ORDER BY space_id ASC";
$result = mysqli_query($conn,$sql);
echo "<table class='table table-striped table-hover' BORDER=2>";
echo"<tr><td><B>Nama Ruang</B></td><td><B>Fasiliti</B></td><td><B>Pilihan</B></td></tr>";
while ($row = mysqli_fetch_array($result))
{
echo "<tr><td>".$row["space_id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td><a href=\"viewAs.php?id=".$row["space_id"]."\">View</a></td></tr>";
}
echo "</table>";
}
else{}
?></center>
<?php
mysqli_close($conn);
?>
                                <div class="w3-row w3-border">
                                    <div class="w3-quarter w3-container w3-green">
                                        <a href="feedbackadmin.php">
                                            <h4>Jumlah Aduan</h4>
                                        </a>
                                        <?php 
                                            require 'dbconfig.php';

                                            $query = "SELECT id FROM feedback ORDER BY id";
                                            $query_run = mysqli_query($conn,$query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' .$row. '</h1>';
                                            ?>
                                    </div>
                                    <div class="w3-quarter w3-container w3-blue">
                                        <a href="viewuser.php">
                                            <h4>Jumlah Pengguna</h4>
                                        </a>
                                        <?php
                                            require 'dbconfig.php';

                                            $query = "SELECT email FROM account ORDER BY email";
                                            $query_run = mysqli_query($conn,$query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' .$row. '</h1>';
                                            ?>
                                    </div>
                                  
                                    <div class="w3-quarter w3-container w3-purple">
                                        <a href="managespace.php">
                                            <h4>Jumlah Fasiliti</h4>
                                        </a>
                                        <?php
                                        require 'dbconfig.php';

                                        $query = "SELECT space_id FROM space ORDER BY space_id";
                                        $query_run = mysqli_query($conn,$query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h1>' .$row. '</h1>';
                                        ?>
                                    </div>
                                    <div class="w3-quarter w3-container w3-aqua">
                                        <h4>Jumlah Transaksi</h4>
                                        <?php
                                        require 'dbconfig.php';

                                        $query = "SELECT transaction_id FROM transaksi ORDER BY transaction_id";
                                        $query_run = mysqli_query($conn,$query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h1>' .$row. '</h1>';
                                        ?>
                                    </div>
                                </div>
                                <?php
                                        include_once("dbconfig.php");
                                        $act1 = "SELECT * FROM reservation";
                                        $act2 = "SELECT * FROM reservation WHERE status='approved'";
                                        $act3 = "SELECT * FROM reservation WHERE role='resident'";
                                        $act4 = "SELECT * FROM reservation WHERE role='public'";
                                    
                                        $exe1 = mysqli_query($conn, $act1);
                                        $exe2 = mysqli_query($conn, $act2);
                                        $exe3 = mysqli_query($conn, $act3);
                                        $exe4 = mysqli_query($conn, $act4);
                                        
                                        
                                        $act_total_resident = mysqli_num_rows($exe3);
                                        $act_total_public = mysqli_num_rows($exe4);
                                        $act_total = mysqli_num_rows($exe1);
                                        $act_app_num = mysqli_num_rows($exe2);
                                        $act_pend_num = $act_total - $act_app_num;

                                        $po1 = "SELECT * FROM account WHERE role='public'";
                                        $po2 = "SELECT * FROM account WHERE role='public' AND status='active'";
                                        $po3 = "SELECT * FROM account WHERE role='public' AND status='suspended'";
                                        $exe5 = mysqli_query($conn,$po1);
                                        $exe6 = mysqli_query($conn,$po2);
                                        $exe7 = mysqli_query($conn,$po3);
                                        $po_total = mysqli_num_rows($exe5);
                                        $po_active = mysqli_num_rows($exe6);
                                        $po_suspend = mysqli_num_rows($exe7);
                                        $po_pend = $po_total - $po_active - $po_suspend ;

                                        $r1 = "SELECT * FROM account WHERE role='resident'";
                                        $r2 = "SELECT * FROM account WHERE role='resident' AND status='active'";
                                        $exe8 = mysqli_query($conn,$r1);
                                        $exe9 = mysqli_query($conn,$r2);
                                        $r_total = mysqli_num_rows($exe8);
                                        $r_active = mysqli_num_rows($exe9);
                                        $r_suspend = $r_total - $r_active;

                                        
                                        
                                        date_default_timezone_set("Asia/Kuala_Lumpur");
                                        $year = date("Y");  // Get current year

                                        $getJan = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-01-%'";
                                        $getFeb = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-02-%'";
                                        $getMar = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-03-%'";
                                        $getApr = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-04-%'";
                                        $getMay = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-05-%'";
                                        $getJun = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-06-%'";
                                        $getJul = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-07-%'";
                                        $getAug = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-08-%'";
                                        $getSep = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-09-%'";
                                        $getOct = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-10-%'";
                                        $getNov = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-11-%'";
                                        $getDec = "SELECT * FROM reservation WHERE start_date LIKE '".$year."-12-%'";

                                        $i = 0;
                                        $count = array(0,0,0,0,0,0,0,0,0,0,0,0);
                                        $month = array($getJan, $getFeb, $getMar, $getApr, $getMay, $getJun, $getJul, $getAug, $getSep, $getOct, $getNov, $getDec);
                                        
                                        while($i < 12){
                                                    $exe_month = mysqli_query($conn, $month[$i]);
                                                    $count[$i] = mysqli_num_rows($exe_month);
                                                    $i++;
                                                }
                                            ?>
                                         <div id="summary">
                            <div id="dash_head">
                                <!--Dashboard Title-->
                                <h1>Ringkasan</h1>
                            </div>
                            <div id="dash_head">
                                <h2>Keseluruhan Tempahan
                                    <?php echo $year; ?>
                                </h2><br>
                                            </div>
                                <div id="areaChart"></div>
                                <!--Activity yearly report-->
                                <script type="text/javascript">
                                    google.charts.load('current', { 'packages': ['corechart'] });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {
                                        var data = google.visualization.arrayToDataTable([
                                            ['Month', 'Amount'],
                                            ['Jan',  <?php echo $count[0]; ?>],
                                            ['Feb',  <?php echo $count[1]; ?>],
                                            ['Mar',  <?php echo $count[2]; ?>],
                                            ['Apr',  <?php echo $count[3]; ?>],
                                            ['May',  <?php echo $count[4]; ?>],
                                            ['Jun',  <?php echo $count[5]; ?>],
                                            ['Jul',  <?php echo $count[6]; ?>],
                                            ['Aug',  <?php echo $count[7]; ?>],
                                            ['Sep',  <?php echo $count[8]; ?>],
                                            ['Oct',  <?php echo $count[9]; ?>],
                                            ['Nov',  <?php echo $count[10]; ?>],
                                            ['Dec',  <?php echo $count[11]; ?>]
                    ]);

                                        var options = {
                                            title: 'Tempahan Tahun <?php echo $year; ?>',
                                            hAxis: { title: 'Month', titleTextStyle: { color: '#333' } },
                                            vAxis: { minValue: 0 },
                                            animation: {
                                                duration: 1300,
                                                startup: true,
                                                easing: 'out'
                                            }
                                        };

                                        var chart = new google.visualization.AreaChart(document.getElementById('areaChart'));
                                        chart.draw(data, options);
                                    }
                                </script>
                                <br><br>
                            <div class="container-fluid">
<center>
<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKuala_Lumpur&amp;src=bWVtYmVydGVjaDk5QGdtYWlsLmNvbQ&amp;src=ZW4ubWFsYXlzaWEjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043" style="border:solid 1px #777" width="100%" height="400" frameborder="0" scrolling="no"></iframe></center>
                            <div class="col-sm-6">
                            <div class="box_2">
                            <div id="sum_item">
                                                    <!--Activity summary-->
                                                    
                                                    <h3>Jumlah Tempahan</h3><br>
                                                    <div id="item_content_flex">
                                                        <div id="piechart1"></div>
                                                        <div></div>
                                                        <script type="text/javascript">
                                                            // Load google charts
                                                            google.charts.load('current', { 'packages': ['corechart'] });
                                                            google.charts.setOnLoadCallback(drawChart);

                                                            // Draw the chart and set the chart values
                                                            function drawChart() {
                                                                var data = google.visualization.arrayToDataTable([
                                                                    ['role', 'amount'],
                                                                    ['resident', <?php echo $act_total_resident; ?>],
                                                                ['public', <?php echo  $act_total_public; ?>]
                            ]);

                                                                // Optional; add a title and set the width and height of the chart
                                                                var options = {
                                                                    'width': 280, 'height': 190, pieHole: 0.5,
                                                                    animation: {
                                                                        duration: 1000,
                                                                        startup: true
                                                                    }
                                                                };

                                                                // Display the chart inside the <div> element with id="piechart"
                                                                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                                                                chart.draw(data, options);
                                                            }
                                                        </script>
                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <th>Jumlah Bilangan</th>
                                                                    <th>:</th>
                                                                    <td>
                                                                        <?php echo $act_total; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Residen</th>
                                                                    <th>:</th>
                                                                    <td>
                                                                        <?php echo $act_total_resident; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Orang Awam</th>
                                                                    <th>:</th>
                                                                    <td>
                                                                        <?php echo $act_total_public; ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        </script>

                                                    </div>
                                                     
                                                        </div>
                                                        </div>
                                               <br>     
                                </div><!-----end of left column----->
                                
                                
                                <div class="col-sm-6">
                                <div class="box_2">
                                <div id="item_flex">
                                                            <div id="sum_item">
                                                                <!--Activity summary-->
                                                                <h3>Akaun</h3><br>
                                                                <div id="item_content_flex">
                                                                    <div id="piechart2"></div>
                                                                    <div></div>
                                                                    <script type="text/javascript">
                                                                        // Load google charts
                                                                        google.charts.load('current', { 'packages': ['corechart'] });
                                                                        google.charts.setOnLoadCallback(drawChart);

                                                                        // Draw the chart and set the chart values
                                                                        function drawChart() {
                                                                            var data = google.visualization.arrayToDataTable([
                                                                                ['role', 'amount'],
                                                                                ['resident', <?php echo $r_total; ?>],
                                                                            ['public', <?php echo $po_total;  ?>]
                            ]);

                                                                            // Optional; add a title and set the width and height of the chart
                                                                            var options = {
                                                                                'width': 280, 'height': 190, pieHole: 0.5,
                                                                                animation: {
                                                                                    duration: 1000,
                                                                                    startup: true
                                                                                }
                                                                            };

                                                                            // Display the chart inside the <div> element with id="piechart"
                                                                            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                                                                            chart.draw(data, options);
                                                                        }
                                                                    </script>
                                                                    <div>
                                                                        <table>
                                                                            <tr>
                                                                                <th>Jumlah Pengguna</th>
                                                                                <th>:</th>
                                                                                <td>
                                                                                    <?php
                                                                                        require 'dbconfig.php';

                                                                                        $query = "SELECT email FROM account ORDER BY email";
                                                                                        $query_run = mysqli_query($conn,$query);
                                                                                        $row = mysqli_num_rows($query_run);
                                                                                        echo '<td>' .$row. '</td>';
                                                                                        ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Residen</th>
                                                                                <th>:</th>
                                                                                <td>
                                                                                    <?php echo $r_total; ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Orang Awam</th>
                                                                                <th>:</th>
                                                                                <td>
                                                                                    <?php echo $po_total; ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                                    </div>               
                                </div><!-----end of right column----->
                        </div> <!----end of container fluid---->
          
                    </div> <!---end of row---->
                </div><!----- end of container------>

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
                                <li><a href="https://bangsajohorbahagia.freshchat.com/a/447109255674192/inbox/3/0">Customer Care</a></li>
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

            