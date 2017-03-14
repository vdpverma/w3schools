<?php
session_start();
include "db.php";


//echo "welcome"; echo $_SESSION['adminid'];
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

<form action="addmenu.php" method="post" enctype="multipart/form-data" >
<tr><td> Name: <input type="text" name="name"></td></tr>
<tr><td>
TYPE<SELECT  NAME="type"  >
		  <Option value="">select</option>
		  <?php $sql="select * from menu where type='0'";
		        $result = $conn->query($sql);
  
            while($row = $result->fetch_assoc()){
		  ?>
            <Option value="<?php echo $row[id];?>"><?php echo $row[name];?></option>
          <?php  }?>
		    </SELECT>
			
			
</td></tr>
<tr><td> Body: <textarea rows="4" cols="50" name="body"></textarea></td></tr>
<tr><td> Image: <input type="file" name="banner"></td></tr>
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