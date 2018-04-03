

<DOCTYPE html>
 <html lang="en">
  <head>
        <title>Add Visitor</title>
		<?php
		 include("header.php");
      ?>
      <?php
      include("db.php");
      $email;
      $event_id;

       if(isset($_GET["visitor_id"])) {
    $visitor_id=$_GET['visitor_id'];
    $sql="select * from visitor where id=$visitor_id";
    $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){
     $name=$row['name'];
     $city=$row['city'];
     $age=$row['age'];
     $gender=$row['gender'];
     $email=$row['email'];
     $event_id=$row['event_id'];
     echo $email;
       $sql="insert into guests(name,city,age,gender,email) values('$name','$city','$age','$gender','$email')";
      $conn->query($sql);
    $sql="select * from guests order by id desc limit 1";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
{      $guest_id=$row['id'];
       $sql="insert into event_guest(event_id,guest_id) values($event_id,$guest_id)";
       $conn->query($sql);
}
  $sql="delete from visitor where id=$visitor_id";
      $conn->query($sql);
            
    header("Location:addvisitorgeneral.php");
  }
}

    ?>

  </head>
 <body>
	 <?php
	 include("nav1.php");?>
<div class="container">
	<div class="headercreateform" id="header">
	  <center>
	    <form class="createform" method="post" action="">
		  	<div class="form-group">
	  			  <h2 >Add Visitors</h2><br>
		  			<table class="table">
		 			   <tr><th>S.No.</th><th>Name</th><th>City</th><th>age</th><th>Gender</th><th>Email</th><th>Event Name</th><th></th></tr>
                            <?php
                        require 'db.php';
                      
                        $sql = "select * from visitor where status='pending'";
                          $result=$conn->query($sql);
                        $i=1;
                        while($row=$result->fetch_assoc()){?>
                        
      		                  		<tr>
                  			<td><?php echo $i; $i++; ?></td>
                             <td><?php echo $row['name']; ?></td>
                             <td><?php echo $row['age']; ?></td>
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['city']; ?></td>
                             <td><?php echo $row['email']; ?></td>
                             <td><?php
                             $event_id=$row['event_id'];
                                $sqlsql="select * from events where id=$event_id";
                                $resultresult=$conn->query($sqlsql);
                                while($rowrow=$resultresult->fetch_assoc()){
                               $name=$rowrow['theme'];
                               echo $name; }
                             $visitor_id=$row['id']; ?></td>
                                                    
                    <td><a href="addvisitorgeneral.php?visitor_id=<?php echo $visitor_id; ?>" >
                      <span class="label label-primary">Add</span></a></td>
                         </tr>
                         <?php } 
                  mysqli_close($conn);
                  ?>              
		  			</table>
		   			<a href="dashboard.php">
		        		<button type="button" class="mybutton">Go To Dashboard</button>
                </a>
	  		</div>
	  	</form>
	  </center>
	</div>
</div>
    

</body>
</html>