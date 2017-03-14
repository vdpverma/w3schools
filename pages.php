<html>
	<head>
		<title>W3Schools</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="header"><img src="logo.png" width="200" height="100" alt="w3schools">
		<h6>THE WORLD'S LARGEST WEB DEVELOPER SITE</h6>
		</div>
		<div id="menu">
		</div>
		<div id="links">
		
		<?php 
					$servername = "localhost"; 
					$username = "root"; 
					$password = ""; 
					$dbname = "w3schools"; 
					// Create connection 
					$conn = new mysqli($servername, $username, $password, $dbname); 
					// Check connection 
					if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
					?>
			<ul>
			   <center>



<?php
					$id=$_GET[id];
					$sql = "SELECT * FROM menu where type=$id"; 
					$result = $conn->query($sql); 
					while($row = $result->fetch_assoc()) 
					{
		              echo " <li><a href='pages.php?pid=". $row["id"]."&id=".$id."'>". $row["name"]."</a></li>";
				} 
				?>
				
				
			  
			  </center></ul>
		
		</div>
		<table>
			<tr>
			<td>
				<?php
					$sql = "SELECT * FROM menu where type=0"; 
					$result = $conn->query($sql); 
					while($row = $result->fetch_assoc()) 
					{ echo "<a href='pages.php?id=". $row["id"]."' class='menu' >". $row["name"]."</a> &nbsp;&nbsp;&nbsp;"; } 
				?>
				<a href="contact.php">Contact US</a>
				
			</td>
			</tr>
			<tr>
				<td><center>
				<p>
				
<?php
					$pageid= $_GET['pid'];
					 $sqlp = 'SELECT * FROM menu where id="'.$pageid.'"';
					 $resultp = $conn->query($sqlp); 
					 $rowp = $resultp->fetch_assoc();
					 echo $rowp["name"]; echo "<br/>";
					echo $rowp["body"]; echo "<br/>";
					
					echo "<img height='200' width='300' src='admin/banners/$rowp[banner]' />";
					 
			?>

				</p></center>
				</td>
			</tr>
			</table>
			<footer>
				
				<?php 
					
					$sql = "SELECT * FROM menu"; 
					$result = $conn->query($sql); 
					while($row = $result->fetch_assoc()) 
					{ echo "<a href='page.php?id=". $row["id"]."' class='menu' >". $row["name"]."</a> &nbsp;&nbsp;&nbsp;"; }  
				?>
				
			<br><br>Copyright &copy; w3schools.com
			</footer>
		
	</body>


</html>