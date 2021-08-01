<?php
//Open connection
$conn= mysqli_connect("localhost","id15455841_members99","sistemBJB-2020","id15455841_adproject2020") or die ("could not connect to mysql"); 
 
//Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);

//Attempt insert query execution
$sql = "INSERT INTO feedback (name, email,message) VALUES ('$name','$email','$message')";

//Execute query
if(mysqli_query($conn, $sql)){
    echo "Feedback added successfully. ";
    header("refresh: 3; url= portal_public.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    header("refresh: 3; url= portal_public.php");
}
// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<a href="portal_public.php" >Back</a>
</html>
