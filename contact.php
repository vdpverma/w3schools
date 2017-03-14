<?php
$servername = "localhost"; 
					$username = "root"; 
					$password = ""; 
					$dbname = "w3schools"; 
					// Create connection 
					$conn = new mysqli($servername, $username, $password, $dbname); 
					// Check connection 
					if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
	

if($_POST){	
					
$name= $_POST['first_name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$sql = "INSERT INTO contact (name, email, phone) VALUES ('$name','$email','$phone')";
if ($conn->query($sql) === TRUE) {
    echo "New MENU addes record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>


<html>
	<head>
		<title>W3Schools</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript">
function isContactus()
{
 with (document.contactForm) 
{
       if (!first_name.value) { alert("Please enter your Name"); !first_name.focus();  return false } 
       if (!email.value) {alert("Please enter your email"); !email.focus();  return false } 
       if (!email.value.match(/^\w+((-\w+)|(\.\w+|-))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
                alert("Invalid E-mail! Please re-enter"); !email.focus();  return false } 
if (!phone.value) { alert("Please enter phone"); !phone.focus();  return false } 
if (phone.value.length<10) {alert("phone minimum 10 characters"); !phone.focus(); return false } 
if (phone.value.length<10) {alert("phone minimum 10 characters"); !phone.focus(); return false } 
}
return true;
}
	
</script>	
	</head>
	
	
	<body>
		<div id="header"><img src="logo.png" width="200" height="100" alt="w3schools">
		<h6>THE WORLD'S LARGEST WEB DEVELOPER SITE</h6>
		</div>
		<div id="menu">
		</div>
		<div id="links">
		

			<ul>
			   <center>
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
				
<form action="contact.php" method="post" onSubmit="return isContactus(this)" name="contactForm">

<table>
<tr><td>Name: <input type="text" name="first_name"></td></tr>
<tr><td>Email: <input type="text" name="email"></td></tr>
<tr><td>Phone: <input type="text" name="phone"></td></tr>
<tr><td><input type="submit" name="submit">

  <!--  <input  type="submit" value="Register" name="Register"> -->
</td></tr>

</table>

</form>

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