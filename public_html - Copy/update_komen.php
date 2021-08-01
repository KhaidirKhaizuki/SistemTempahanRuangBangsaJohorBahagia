<?php
  if(isset($_POST['update'])){ // If admin approve / reject
    ini_set('display_errors', 1);
	error_reporting(~0);

	  $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

	   $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  

        $komen = $_POST['komen'];
            $sql = "UPDATE 'reservation' 
                    SET 'komen' = '$komen'
                    WHERE 'reserve_id'='".$_GET['rid']."'";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                echo "<script>";
                echo "alert('Komen telah ditambah!');";
                echo "location = 'view_reserve_request.php'";
                echo "</script>";
            }
            else{
                echo "Failed";
            }
        
        }
?>