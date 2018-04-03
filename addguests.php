<DOCTYPE html>
 <html lang="en">
  <head>
        <title>Add Guests</title>
		<?php
     require 'db.php';
     if(isset($_GET["guest_id"])) {
      $event_id = $_GET["event_id"];
      $guest_id = $_GET["guest_id"];
      
        $sql="insert into event_guest (event_id,guest_id) values('$event_id','$guest_id')";
      $result = $conn->query($sql);   
         header("Location:addguests.php?event_id=$event_id");
         
     }
		 include("header.php");
    
      ?>

  </head>
 <body>

	 <?php
	 include("nav1.php");
   ?>
<div class="container">

	<div class="headercreateform" id="header">
	  <center>
	    <form class="createform" method="post" action="">
		  	<div class="form-group">
	  			  <h2 >Add Guests</h2><br>
		  			<table class="table">
		 			   <tr><th>S.No.</th><th>Name</th><th>City</th><th>age</th><th>Gender</th><th>Email</th><th></th></tr>
                            <?php
                        require 'db.php';
                        $event_id=$_GET['event_id'];
                        $sql = "SELECT DISTINCT * FROM guests WHERE NOT EXISTS (SELECT * FROM event_guest WHERE event_guest.guest_id = guests.id and event_id = " . $event_id . ");";
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
                        
                                                    
                    <td><a href="addguests.php?event_id=<?php echo $_GET['event_id'] ?>&guest_id=<?php echo $row['id'] ?> " >
                      <span class="label label-primary">Add</span></a></td>
                         </tr>
                         <?php } 
                  mysqli_close($conn);
                  ?>              
		  			</table>
                        Link To Be Share on whatsapp and facebook:<input type="text" class="input-group input-lg" value="localhost/rsvp/home.php?event_id=<?php echo $event_id ?>" readonly>
 
		   			<a href="dashboard.php">
		        		<button type="button" class="btn btn-default navbar-left">Go To Dashboard</button>
                </a>
	  		</div>
	  	</form>
	  </center>
	</div>
</div>
    
</body>
</html>