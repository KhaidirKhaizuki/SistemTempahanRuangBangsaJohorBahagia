<?php
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "dbconfig.php";
$conn= mysqli_connect("localhost","id15455841_members99","sistemBJB-2020","id15455841_adproject2020") or die ("could not connect to mysql");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM feedback WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: feedbackadmin.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
      
      <div id="main">
  <form action="feedbackadmin.php" align=left>
                    <button type="submit">&nbsp;&nbsp;Balik&nbsp;&nbsp; </button>
 </form>