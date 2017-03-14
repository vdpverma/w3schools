<?php
session_start();
include "db.php";

$id= $_GET['id'];

$esql="select * from menu where id='$id'";
		        $resulte = $conn->query($esql);
                $erow = $resulte->fetch_assoc();
				$name= $erow[name];
			    $type=$erow[type];
			    $body=$erow[body];
			    $banner=$erow[banner];
				
				
				
 if(!empty($_SESSION['adminid']))
    {
?>

<html>
<head></head>
<body>
<table width="800" align="center">
<tr><td><?php include "links.php";?></td></tr>
<tr>
<td colspan="6">

<form action="updatem.php" method="post" enctype="multipart/form-data" >
<tr><td> Name: 
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" name="name" value="<?php echo $name;?>"></td></tr>
<tr><td>
TYPE<SELECT  NAME="type"  >
		  <Option value="<?php echo $type;?>"><?php echo $type;?></option>
		  <?php $sql="select * from menu where type='0'";
		        $result = $conn->query($sql);
  
            while($row = $result->fetch_assoc()){
		  ?>
            <Option value="<?php echo $row[id];?>"><?php echo $row[name];?></option>
          <?php  }?>
		    </SELECT>
			
			
</td></tr>
<tr><td> Body: <textarea rows="4" cols="50" name="body"><?php echo $body;?></textarea></td></tr>
<tr><td> Image: <input type="file" name="banner" > <?php 	echo "<img height='100' width='100' src='banners/$banner' />"; ?></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>


</td></tr>
</table>

</body>
</html>


<?php	
	
	} else {
			  header('Location: index.php');
	}
		

?>