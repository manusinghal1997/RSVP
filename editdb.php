  <?php
    require 'db.php';
    $theme=$_POST['theme'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $venue=$_POST['venue'];
    $event_id=$_GET['event_id'];
    $sql="update events set theme='$theme',date='$date',time='$time',venue='$venue' where id='$event_id'";
    $conn->query($sql); 
    header("Location:edit.php?event_id=$event_id");
  ?>