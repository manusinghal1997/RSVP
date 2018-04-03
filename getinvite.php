<?php 
	require 'db.php';
	$name=$_POST["name"];
	$city=$_POST["city"];
	$age=$_POST["age"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$event_id=$_GET['event_id'];
	$sql="select * from guests where email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	    echo "You have already registered";
	}
	else
	{
		$sql="insert into visitor(name,city,age,email,gender,event_id) values('$name','$city','$age','$email','$gender','$event_id')";
		$result=$conn->query($sql);
	}
	header("Location:home.php?event_id=$event_id");
?>

