<DOCTYPE html>
  <html lang="en">
    <head>
      <title>Guests Management</title>
       <?php 
        include("header.php");?>
    </head>
    <body>
       <?php include("nav1.php");?>
       
        <div class="container">
          <h2><center>Guests List</center></h2>
              <table class="table">
                <tr><th>S.No.</th><th>Name</th><th>Age</th><th>Gender</th><th>City</th><th>Email</th><th></th></tr>
                  <?php
                    require 'db.php';
                       $sql="select * from guests limit 100";
                       $result=$conn->query($sql);
                  $i=1;
                       while($row=$result->fetch_assoc()){?>
                  		<tr>
                  			<td><?php echo $i; $i++; ?></td>
                           <td><?php echo $row['name'];?></td>
                           <td><?php echo $row['age'];?></td>
                           <td><?php echo $row['gender'];?></td>
                           <td><?php echo $row['city'];?></td>
                           <td><?php echo $row['email'];?></td>
                           <td><a href="removeguests.php?guests_id=<?php echo $row['id']; ?>" >
                           <span class="label label-primary">Remove</span>
                         </a></td>
                           
                        </tr>
                        <?php } 
                           mysqli_close($conn);
                        ?>                           
              </table><center>
              <a href="addguestsgeneral.php">
                <button type="button" class="mybutton">Add Guests</button>
              </a>
              <a href="addvisitorgeneral.php">
                <button type="button" class="mybutton">Add From Visitors List</button></a>
                      </center>
          </div>
        
</body>
</html>