<?php
session_start();
require "db.php";


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

<table>
<tr><td><b> Name <b></td><td><b> Type<b> </td><td><b> Action<b> </td></tr>
		  <?php $sql="select * from menu";
		        $result = $conn->query($sql);
				//$row = $result->fetch_assoc();
				//print_r($row);
				
            while($row = $result->fetch_assoc()){
				
				
		  ?>
          <tr><td>  <?php echo $row[name];?></td><td><?php echo $row[type];?></td><td>
		            <a href="editm.php?id=<?php echo $row[id];?>"> Edit </a> | 
		            <a href="delm.php?id=<?php echo $row[id];?>">Delete</a></td></tr>
          <?php  }?>
</table>



</td></tr>
</table>

</body>
</html>


<?php	
	
	} else {
			  header('Location: index.php');
	}
		

?>