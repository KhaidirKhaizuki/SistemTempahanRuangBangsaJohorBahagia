<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	  $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

	   $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	  

	$sql = "UPDATE space SET 
			name = '".$_POST["name"]."' ,
			description = '".$_POST["description"]."' ,
			
			category = '".$_POST["category"]."' ,
            block = '".$_POST["block"]."' ,
            price_public = '".$_POST["price_public"]."' ,
            price_resident = '".$_POST["price_resident"]."' ,
			status = '".$_POST["status"]."'
			WHERE space_id = '".$_POST["space_id"]."' ";
			

	$query = mysqli_query($conn,$sql);

	
	 if ($query){
            echo "<script>";
            echo "alert('Ruang tersebut telah berjaya dikemaskini.');";
            echo "location='managespace.php';";
            echo "</script>";
        }
            
        else{
            echo "<script>";
            echo "alert('Gagal untuk mengemaskini ruang tersebut.');";
            echo "location = 'managespace.php';";
            echo "</script>";
        }

	mysqli_close($conn);
?>
</body>
</html>