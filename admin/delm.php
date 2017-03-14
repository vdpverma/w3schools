<?php
include "db.php";
$id=$_GET['id'];
$sql = "DELETE FROM menu WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>