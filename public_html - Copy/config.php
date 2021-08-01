<?php 
    $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }
    else{
        //echo "Connection successfully";
    }
?>
