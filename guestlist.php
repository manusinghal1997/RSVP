<DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Guest List</title>
<?php
include ("header.php");
      ?>
     
  </head>
           
   <body>
               <?php include("nav1.php");?>
		<div class="container" >           
    <h2 align="center" >Added Guests</h2><br>
            <table class="table">
             <tr><th>S.No.</th><th>Name</th><th>City</th><th>age</th><th>Gender</th><th>Email</th><th>Status</th></tr>
                            <?php
                        require 'db.php';
                        $event_id=$_GET['event_id'];
                        $sql = "SELECT DISTINCT * FROM guests WHERE EXISTS (SELECT * FROM event_guest WHERE event_guest.guest_id = guests.id and event_id = " . $event_id . ");";
                          $result=$conn->query($sql);
                        $i=1;
                        while($row=$result->fetch_assoc()){?>
                        
                                <tr>
                                        
                        <td><?php 
                                                           $guest_id=$row['id'];
                                                           echo $i; $i++; ?></td>
                             <td><?php echo $row['name']; ?></td>
                             <td><?php echo $row['age']; ?></td>
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['city']; ?></td>
                             <td><?php echo $row['email']; ?></td>
                            <td>
                                <?php
                                    require 'db.php';
                                $sqlsql="select * from event_guest where event_id='$event_id' and guest_id='$guest_id'";
                                $resultresult=$conn->query($sqlsql);
                                $rowrow=$resultresult->fetch_assoc();
                                ?>
                                <?php 
                                    if($rowrow['response']==null)                       
                                                           echo '<span class="label label-primary">Pending</span>';
                            else{
                                if($rowrow['response']=='true')                       
                                {
                            echo '<span class="label label-success">Accepted</span>';
                                }
                                        else                     
                                                           echo '<span class="label label-warning">Declined</span>';
                                     }
                                                           ?>
                                        </td>
                        
                   
                         <?php } 
                  mysqli_close($conn);
                  ?>              
            </table>
       </div>
    <center>
          <?php
          require 'db.php';
          $sql="select date from events where id=$event_id";
          $result=$conn->query($sql);
          $row=$result->fetch_assoc();
          $date=$row['date'];
          $datecurrent=date("Y-m-d");
        if($datecurrent<$date){
          ?>
        
        <a href="addguests.php?event_id=<?php echo $event_id ?>" >
        <button type="button" class="mybutton">Add Guests</button></a>
    
        <a href="addvisitor.php?event_id=<?php echo $event_id ?>" >
        <button type="button" class="mybutton">Add From Visitor List</button></a>
      <?php
       }
       ?>
    </center>      
      
</body>
</html>