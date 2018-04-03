<?php 
require 'db.php';

if(isset($_POST['login']))
{
  $email=$_POST["email"];
$password=$_POST["password"];
excho $email;
echo $password;

$sql="select * from host where email='$email'";
$result=$conn->query($sql);

if($result->num_rows==0)
{
        $message="Email id is not registered";
   header("Location:passmatch.php?message=$message");
}
else
{
    $row=$result->fetch_assoc();
    
        if($_POST['password']==$row["password"])
         {
          header('Location:dashboard.php');
        }
            else{
              $message="You have entered wrong passward";
                header("Location:passmatch.php?message=$message");
               }
}
}
if(isset($_POST['rsvp']))
{
    $event_id=$_GET['event_id'];
    
}
?>
