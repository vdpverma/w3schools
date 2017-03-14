<?php
include "db.php";
	session_start();
if($_POST){
    
    $username=  $_POST['name'];
    $password=  $_POST['pwd'];
    
    
    $sql = "SELECT * FROM users where name='$username' and pwd='$password'";
    $result = $conn->query($sql);
    //count($result);
    $row = $result->fetch_assoc();
        //$row["id"];
       //$row["name"];
    if(!empty($row["id"]))
    {
	
		$_SESSION['adminid']= $row["id"];
		
		
//$myfile = fopen("userlog.txt", "w") or die("Unable to open file!");
$today= date("Y-m-d");
 $loc= $_SERVER['REMOTE_ADDR'];
$txt = $row["name"]."\n".$today."\n".$loc."\n";


$myfile = file_put_contents('userlog.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

//fwrite($myfile, $txt);
fclose($myfile);
		
		
		
        //echo  "welcome";
        header('Location: welcome.php');
    }
    else {
         
        echo  "Not authenced user";
    }
    
    
}
   
if($_SESSION['adminid']){
	 
	
	header('Location: welcome.php');
}
?>

<html>
<head>
</head>
<body>
<table align="center" width="500">
<form action="index.php" method="post">
<tr><td>User Name: <input type="text" name="name"></td></tr>
<tr><td>Password : <input type="text" name="pwd"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
</body>
</html>