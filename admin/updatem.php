<?php
include "db.php";
 $id=$_POST['id'];
 $name=$_POST['name'];
 $type=$_POST['type'];
 $body=$_POST['body'];

$p= $_FILES['banner']['name'];
$pg=explode('.',$p);
$str=date("mdY-hms");
$banner=$pg[0]."_".$str.".".$pg[1];
move_uploaded_file($_FILES["banner"]["tmp_name"],"banners/" .$banner);

if(!empty($pg[0])){
$sql = "UPDATE menu SET name='$name',type='$type',body='$body',banner='$banner' WHERE id='$id'";
} else {
$sql = "UPDATE menu SET name='$name',type='$type',body='$body' WHERE id='$id'";
	
}


if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "Error Updated record: " . $conn->error;
}

// header('Location: ml.php');


?>