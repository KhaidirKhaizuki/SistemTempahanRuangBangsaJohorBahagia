<?php 
    $servername = "localhost";
    $dbusername = "id15455841_members99";
    $dbpassword = "sistemBJB-2020";
    $dbname = "id15455841_adproject2020";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname)or die ("could not connect to mysql"); 

$space_id = $_REQUEST['space_id'];
//Attempt delete query execution

$result = mysqli_query($con,"SELECT * FROM space WHERE space_id =$space_id LIMIT 1");
$row = mysqli_fetch_assoc($result1);
?> 
 
<body> 
<?php  echo "<tr><td><img src='" . $row["filepath"] . "'></td>";?><br>
             This is your pic ID:<?php echo $row['idpic']; ?><br>

    <div class="controls" style="width:700px;"> 
         <div class="container" style="width:700px;"> 
	<form action="update-process.php" method= "POST" enctype="multipart/form-data">
   <div class="controls">
     <label for="name">Nama ruang: </label>
<input type="hidden" name="space_id" value="<?php echo $space_id; ?>">
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
    </div> 
    



<INPUT class="btn1"  TYPE="submit" VALUE="Kemas Kini"></a></button>

</form>
</body>
</html>