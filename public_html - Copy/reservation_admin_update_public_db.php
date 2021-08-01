<?php

include_once("dbconfig.php");
if(isset($_POST['submit'])){ //If update is done
    
    $start_date = $start_time = $end_date = $end_time = $reserve_id = "";
    
    $reserve_id = $_SESSION["reserve_id"];
  
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];
    
    if($start_date > $end_date){    // Cannot tolerate if end_date is earlier than start_date
        echo "<script>";
        echo "alert('Tarikh Mula dan Habis tidak logik!');";
        echo "location = 'reservation_admin_public.php'";
        echo "</script>";
    }
    else{
        $sql = "UPDATE reservation SET start_date='$start_date', start_time='$start_time', end_date='$end_date', end_time='$end_time' WHERE  reserve_id = '$reserve_id'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "<script>";
            echo "alert('Butiran tempahan telah dikemaskini!');";
            echo "location = 'reservation_admin_public.php'";
            echo "</script>";
        }
        else{
            echo "Failed";
        }
    }
}

?>