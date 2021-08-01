<?php 
include "dbconfig.php";
session_start(); 
if(!isset($_SESSION["email"])){
echo "<script>";
echo "alert('Anda telah log keluar, sila log masuk semula.');";
echo "location = 'index.php'";
 echo "</script>";
    }
   
?>

<?php   
   if (isset($_REQUEST['submit'])){
 include_once("dbconfig.php");
    
       


        $name = $_POST['name'];                  //echo $name;
        $description = $_POST['description'];    //echo $description;
        $category = $_REQUEST['category'];          //echo $category;
        $block = $_REQUEST['block'];          //echo $block;
        $capacity = $_POST['capacity'];          //echo $capacity;
        $price_public = $_POST['price_public'];  //echo $price_public;
        $price_resident = $_POST['price_resident'];  //echo $price_resident;
        $status = $_REQUEST['status'];              //echo $status;
              
        
     
        $target_dir = "images/";
        if (is_uploaded_file($_FILES['pic']['tmp_name'])){
            $target_file = $target_dir . basename($_FILES["pic"]["name"]);
            $filename = basename($_FILES["pic"]["name"]);
        }
                    
        else{
            $target_file = $target_dir . "no-image.png";
            $filename = "none";
        }   
                    
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $sql = mysqli_query($conn, "INSERT INTO space(name, description, category, block, capacity,price_public,price_resident, status, filename,filepath) VALUES ('$name', '$description','$category','$block','$capacity', '$price_public','$price_resident', '$status', '$filename', '$target_file')");

            
  

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
            if (file_exists($target_file)) {
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
                if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
                } 

                else
                    echo "Sorry, there was an error uploading your file.";            
            }
        }
        if ($sql){
            echo "<script>";
            echo "alert('Ruang tersebut telah berjaya ditambahkan.');";
            echo "location='managespace.php';";
            echo "</script>";
        }
            
        else{
            echo "<script>";
            echo "alert('Gagal untuk menambah ruang tersebut.');";
            echo "location = 'managespace.php';";
            echo "</script>";
        }
      mysqli_close($conn);
      
    }
?>