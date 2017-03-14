<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3schools";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name= $_POST['name'];
$type= $_POST['type'];
$body= $_POST['body'];


$p= $_FILES['banner']['name'];
$pg=explode('.',$p);
$str=date("mdY-hms");
$banner=$pg[0]."_".$str.".".$pg[1];
move_uploaded_file($_FILES["banner"]["tmp_name"],"banners/" .$banner);



$sql = "INSERT INTO menu (name, type,body,banner)
VALUES ('$name','$type','$body','$banner')";

if ($conn->query($sql) === TRUE) {
    echo "New MENU addes record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 header('Location: ml.php');

?>