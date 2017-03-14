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
			<ul>
			   <center> <li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScripts</a></li>
				<li><a href="#">SQL</a></li>
				<li><a href="#">PHP</a></li>
			  </center></ul>
		
		</div>
		<table>
			<tr>
			<td>
				<?php 
					$servername = "localhost"; 
					$username = "root"; 
					$password = ""; 
					$dbname = "w3schools"; 
					// Create connection 
					$conn = new mysqli($servername, $username, $password, $dbname); 
					// Check connection 
					if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
					$sql = "SELECT * FROM menu where type=0"; 
					$result = $conn->query($sql); 
					while($row = $result->fetch_assoc()) 
					{ echo "<a href='pages.php?id=". $row["id"]."' class='menu' >". $row["name"]."</a> &nbsp;&nbsp;&nbsp;"; } 
				?>
				
			</td>
			</tr>
			<tr>
				<td><center>
				<p>
				HTML5 Tutorial<br>

				With HTML you can create your own Web site.<br>

				This tutorial teaches you everything about HTML.<br>

				HTML is easy to learn - You will enjoy it.

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