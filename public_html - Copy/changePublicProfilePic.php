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
       $conn= mysqli_connect("localhost","id15455841_members99","sistemBJB-2020","id15455841_adproject2020") or die ("could not connect to mysql"); 

        $email = $_REQUEST['email'];                  
        
        
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

        $sql = mysqli_query($conn, "INSERT INTO profilepic(email, filename, filepath)
                                    VALUES ('$email', '$filename', '$target_file') ");

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
            echo "alert('Gambar Profil telah berjaya ditambahkan.');";
            echo "location='kk_public.php';";
            echo "</script>";
        }
            
        else{
            echo "<script>";
            echo "alert('Gagal untuk menambah gambar profil.');";
            echo "location = 'changePublicProfilePic.php';";
            echo "</script>";
        }

        mysqli_close($conn);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJB Tempahan Utiliti</title>
    
</head>

<body>

    <h1>Gambar Profil</h1>
    
    <hr>
    <br>
    <div>
        <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
            <table class="table-update">
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email" size="65" value="<?php echo $_SESSION['email']; ?>"></td>
                </tr>
               
                <tr>
                    <th>Gambar</th>
                    <td><input type="file" name="pic" id="pic"></td>
                </tr>
            </table>

            <!-- Buttons -->
            <div class="button-container">
                <div>
                    <input type="submit" class="update" name="submit" id="button" value="Hantar">
                </div>

                <div>
                    <input type="reset" class="reset" id="button" onclick="resett()" value="Set Semula">
                </div>

                <div>
                    <a href="kk_public.php">
                        <input type="button" class="back" id="button" value="Kembali">
                    </a>
                </div>
            </div>
            <!-- Buttons END -->
        </form>
    </div>
</body>
</html>