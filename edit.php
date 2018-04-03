<DOCTYPE html>
  <html lang="en">
    <head>
      <title>Edit Event</title>
      <?php include("header.php");?>
    </head>
    <body>
      <?php
        include("nav1.php");
      ?>
      <div class="container">
       
        <div class="headercreateform">
          <center>
            <?php
             $event_id=$_GET['event_id'];
            ?>
            <form class="createform" method="post" action="editdb.php?event_id=<?php echo $event_id ?>">
              <div class="form-group">
                <h2>Edit Event</h2>
                <?php
                  require 'db.php';
                  $event_id=$_GET['event_id'];
                  $sql="select * from events where id=$event_id";
                  $result=$conn->query($sql);
                  $row=$result->fetch_assoc();
                ?>
                <input class="form-control" type="text" name="theme" value="<?php echo $row['theme'] ?>"><br>
                <input  class="form-control" type="date" name="date" value="<?php echo $row['date'] ?>"><br>
                <input class="form-control" type="time" name="time" value="<?php echo $row['time'] ?>"><br>
                <input class="form-control" type="text" name="venue" value="<?php echo $row['venue'] ?>">
<br>
                  Link To Be Share on whatsapp and facebook:
             <input type="text" class="input-group input-lg" value="localhost/rsvp/home.php?event_id=<?php echo $event_id ?>" readonly>
 
                  <a href="guestlist.php?event_id=<?php echo $event_id ?>"> 
                   
                <button type="button" class="mybutton">Check Guests Status</button>
              </a>
                <a href="dashboard.php"> 
                <button type="button" class="mybutton">Go To Dashboard</button>
                </a>
                <button type="submit" name="edit" class="mybutton">Save</button>
              </div>
            </form>
          </center>
        </div>
      </div>
   </body>
</html>