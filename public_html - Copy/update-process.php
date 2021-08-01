<?php
    if(isset($_POST['back'])){
        header('location: showenquiry.php');
    }
 
  $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";
  $con= mysqli_connect($servername,$dbusername,$dbpassword, $dbname) or die ("could not connect to mysql"); 
  
    $name = $description = $category= $block= $capacity=$price_public= $price_resident=$status=$filename=$target_file="";
    

    if(isset($_GET['details'])){
        $id = $_GET['details'];
 
        $sql = mysqli_query($con, "SELECT * FROM space WHERE space_id=$space_id");
        $result = mysqli_fetch_array($sql);
        $name = $result['Nama'];
        $email = $result['Email'];
        $message = $result['Message'];
        $id = $result['Bilangan'];
 
 
     
 
    }
    
       else  if(isset($_POST['update'])) // when click on Update button
{
        $name = $_POST['name'];                  //echo $name;
        $description = $_POST['description'];    //echo $description;
        $category = $_POST['category'];          //echo $category;
        $block = $_POST['block'];          //echo $block;
        $capacity = $_POST['capacity'];          //echo $capacity;
        $price_public = $_POST['price_public'];  //echo $price_public;
        $price_resident = $_POST['price_resident'];  //echo $price_resident;
        $status = $_POST['status']; 
	
    $edit = mysqli_query($conn,"update space set   name = '$name' , description= '$description' , category = '$category' , block ='$block' , capacity = '$capacity' , price_public = '$price_public' , price_resident = '$price_resident' , status = '$status' where id='$id'");
	
}
    

    $con->close();
 
    
?>



