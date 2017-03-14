<?php
session_start();
echo "welcome"; echo $_SESSION['adminid'];
 if(!empty($_SESSION['adminid']))
    {
?>

<html>
<head></head>
<body>
<table width="600" align="center">
<tr><td><?php include "links.php";?></td></tr>
<tr><td></td></tr>
</table>

</body>
</html>


<?php	
	
	} else {
			  header('Location: index.php');
	}
		

?>