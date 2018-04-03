<DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Create Event</title>
<?php

include ("header.php");
      ?>
     
  </head>
     <?php
      require 'db.php';
     if(isset($_POST["theme"])){
      $theme=$_POST["theme"];
      $date=$_POST["date"];
      $time=$_POST["time"];
      $venue=$_POST["venue"];
      
      $sql="insert into events(theme,date,time,venue) values('$theme','$date','$time','$venue')";
      $conn->query($sql);

        $sql="select * from events order by id desc limit 1";
        $result=$conn->query($sql);
           while($row=$result->fetch_assoc())
            
               $event_id=$row['id'];
         
          
         header("Location:addguests.php?event_id=$event_id");
          }
      ?>      
   <body>

               <?php include("nav1.php");?>
		<div class="container">            
            <div class="headercreateform">
				<center>
					<form class="createform" method="post" action="createevent.php">
						  <div class="form-group">
							      <h2>Create Event</h2>
								  <input class="form-control" type="text" name="theme" placeholder="Event Theme" required><br>
							      <input  class="form-control" type="date" name="date" placeholder="Date" required><br>
								  <input class="form-control" type="time" name="time" placeholder="Time" required><br>
								  <input class="form-control" type="text" name="venue" placeholder="Venue" required><br>
							   	  <a href="dashboard.php">
					    		    <button class="mybutton" type="button" class="btn btn-default">Cancel</button>
					    		  </a>
					    		  <button class="mybutton" name="createevent" type="submit">Create</button>
				           </div>
		 			 </form>
                  </center>
              </div>
	   </div>
       
</body>
</html>