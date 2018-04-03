<?php 
include 'db.php';
$guests_id=$_GET['guests_id'];
$sql="delete from guests where id='$guests_id'";
$conn->query($sql);
header("Location:manageguests.php");
?>