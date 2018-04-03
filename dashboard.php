


<DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <?php
        include("header.php");
        ?>
<script src="app.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
   $window.scroll(function(){
  if($(document).scrollTop()>50){
  $('nav').addClass('shrink');
  }
  else{
  $('nav').removeClass('shrink');
  }
  });

</script>    

    </head>
  <body >
      <?php
        include("nav1.php");
      ?>
    <div class="container-fluid" style="margin-top:60px;">
    
       <h1>UpComing Events</h1>
        </div>
      <table class="table table-hover" >
        <tr><th>S.No.</th>
          <th>Theme</th>
          <th>Date</th>
          <th>Time</th>
          <th>Venue</th>
          <th>Guests Confirmed</th>
          
        </tr>
        <?php 
           require 'db.php';
         $date=date("Y-m-d");
           $sql="select * from events where date>=$date limit 20";
           $result=$conn->query($sql);
           $i=1;
           while($row=$result->fetch_assoc()){
        ?>       
        <tr onclick='window.location="edit.php?event_id=<?php echo $row['id'] ?>";'>
          <td><?php echo $i; $i++; ?></td>
          <td><?php echo $row['theme']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['venue']; ?></td>
          <td><?php 
		  $event_id=$row['id'];
          $sqls="select * from event_guest where event_id=$event_id and response='true'";
           $results=$conn->query($sqls);
           $j=0;
           while($rows=$results->fetch_assoc())
           	$j++;

        
           echo $j; ?></td>
        </tr>
          
        <?php
                                             }
        ?>
      </table>
         <h1>Previous Events</h1>
        
      <table class="table table-hover" >
        <tr><th>S.No.</th>
          <th>Theme</th>
          <th>Date</th>
          <th>Time</th>
          <th>Venue</th>
          <th>Guests Attended</th>
          
        </tr>
        <?php 

           require 'db.php';
           $sql="select * from events where date<=$date limit 20";
           $result=$conn->query($sql);
           $i=1;
           while($row=$result->fetch_assoc()){
        ?>       
        <tr onclick='window.location="edit.php?event_id=<?php echo $row['id'] ?>";'>
          <td><?php echo $i; $i++; ?></td>
          <td><?php echo $row['theme']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['venue']; ?></td>
          <td><?php
		  $event_id=$row['id'];
          $sqls="select * from event_guest where event_id=$event_id and response='true'";
           $results=$conn->query($sqls);
           $j=0;
           while($rows=$results->fetch_assoc())
           	$j++;        
           echo $j; ?></td>
        </tr>
        <?php
            }
        ?>
      </table>
       
    </div> 
   

  </body>
 
</html>