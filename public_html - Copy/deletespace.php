<?php
 $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM space WHERE space_id='" . $_GET["space_id"] . "'";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo '<script>alert("Ruangan telah berjaya dipadam!");';
       echo 'window.location= "managespace.php";</script>';
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();

    }

$conn = null;
?>

