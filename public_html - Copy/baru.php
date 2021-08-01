
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
include "config.php";
if (isset($_GET['submit'])) {
      $name = $_GET['name'];                  //echo $name;
        $description = $_GET['description'];    //echo $description;
        $category = $_GET['category'];          //echo $category;
        $block = $_GET['block'];          //echo $block;
        $capacity = $_GET['capacity'];          //echo $capacity;
        $price_public = $_GET['price_public'];  //echo $price_public;
        $price_resident = $_GET['price_resident'];  //echo $price_resident;
        $status = $_GET['status'];  
$query = mysql_query("UPDATE space 
SET name = '$name' , description= '$description' , category = '$category' , block ='$block' , capacity = '$capacity' , price_public = '$price_public' , price_resident = '$price_resident' , status = '$status' , filename = '$filename' ,filepath= '$target_file'  WHERE space_id = $space_id" );
}


$query = mysql_query("select * from space);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updatephp.php?update={$row['space_id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from employee where space_id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
			    
                    <form method="post" enctype="multipart/form-data">
                    						    
     <div class="controls">
     <label for="name">Nama ruang: </label>
<tr><td align="center"><?php echo  $row["space_id"]; ?> hidden ></td>
      <input type="text" id="name"  name="name"  value= <?php  echo $row["name"];  ?>   required>
    </div>
    
    <div class="controls">
     <label for="description">Penerangan: </label>
      <textarea name="description" cols="50" rows="8" placeholder="contoh: Menyediakan 3 kipas angin" value= <?php  echo $row["description"];  ?>required></textarea>
   
    </div>   
    
     <div class="controls">
      <i class="fa fa-sort"></i>
      <label for="category" id="category" required>Kategori: </label>
     <select name="category">
        <option value="blank"></option>
                            <option value<?php if($row['category']=="Dewan"){echo "selected";}?>>Dewan</option>
                            <option value<?php if($row['category']=="Kolong"){echo "selected";}?>>Kolong</option>
                            <option value<?php if($row['category']=="Rumah Penginapan"){echo "selected";}?>>Rumah Penginapan</option>
                            <option value<?php if($row['category']=="Tempat Beriadah"){echo "selected";}?>>Tempat Beriadah</option>
                        </select>
      </select>
    
     </div>  
     
    <div class="controls">
        <label for="capacity">Kapasiti: </label>
      <input type="number" name="capacity" value= <?php  echo $row["capacity"];  ?>required>
    </div> 
     <div class="controls">
      <i class="fa fa-sort"></i>
      <label for="block" id="block" required>Blok:</label>
      <select name="block">
        <option value="blank"></option>
                            <option value<?php if($row['block']=="Kenari"){echo "selected";}?>>Kenari</option>
                            <option value<?php if($row['block']=="Merak"){echo "selected";}?>>Merak</option>
                            <option value<?php if($row['block']=="Nuri"){echo "selected";}?>>Nuri</option>
                            <option value<?php if($row['block']=="Jentayu"){echo "selected";}?>>Jentayu</option>
                        </select>
     
    </div>   
     

   <div class="controls">
          <label for="price_public">Penduduk luar(RM):</label>
            <input type="number" name="price_public" value= <?php  echo $row["price_public"];   ?> required>
    </div>      
    
    <div class="controls">
    
          <label for="price_resident">Penduduk(RM):</label>
            <input type="number" name="price_resident" value= <?php  echo $row["price_resident"];  ?> required>
    </div> 
        
          
    <div class="controls">
      <i class="fa fa-sort"></i>
      <label for="status" id-"status" required>Status:</label>
    <select name="status">
        <option value="blank"></option>
                            <option value<?php if($row['status']=="ada"){echo "selected";}?>>Sedia Ada</option>
                            <option value<?php if($row['status']=="tiada"){echo "selected";}?>="tiada">Tiada Stok</option>
                        </select>

    
     </div>     
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>
