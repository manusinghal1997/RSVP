<?php
require 'db.php';
$email=$_POST['email'];  
$event_id=$_GET['event_id'];
                          require 'db.php';
                       $sql="select * from guests where email='$email'";
                      $row=$conn->query($sql)->fetch_assoc();
                       $guest_id=$row['id'];
                       
$check=$_POST['t'];
if(isset($check)){
    $sql="update event_guest set response='true' where event_id='$event_id' and guest_id='$guest_id'";
    $conn->query($sql);
    
    header("Location:home.php?event_id=$event_id");
}
else
{
    $sql="update event_guest set response='false' where event_id='$event_id' and guest_id='$guest_id'";
    $conn->query($sql);
    header("Location:home.php?event_id=$event_id");


}
?>