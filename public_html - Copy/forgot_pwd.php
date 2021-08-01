<?php
   $conn= mysqli_connect("localhost","id15455841_members99","sistemBJB-2020","id15455841_adproject2020") or die ("could not connect to mysql"); 
 
//Escape user inputs for security

$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);

//Attempt insert query execution
$sql = "INSERT INTO forgot (email,status) VALUES ('$email','$status')";

//Execute query
if(mysqli_query($conn, $sql)){
    echo "Permintaan tukar kata laluan berjaya dihantar, Kata laluan sementara akan diemel ke email anda dalam masa yang terdekat. ";
   header("refresh: 3; url= login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
     header("refresh: 3; url= forgot_pwd_form.php");
}
// Close connection
mysqli_close($conn);
?>

<html lang="en">
<a href="login.php" >Balik</a>
</html>