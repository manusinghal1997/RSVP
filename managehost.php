<DOCTYPE html>
<html lang="en">
  <head>
     <?php 

      require 'db.php';
      if(isset($_GET['id']))
      {
      $id=$_GET['id'];
      $sql="delete from host where id='$id'";
      $conn->Query($sql);
        header("Location:managehost.php");
      }
      
     ?>
      
<title>Host Management</title>
      <?php include("header.php");?>
  </head>
   <body>
   <?php
   include("nav1.php");
   ?>
  <div class="container">
        <h2><center>Host List</center></h2>
              <table class="table">           
              <div class="row">

                 <tr>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>S.No.</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>Name</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>Age</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>Gender</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>City</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>Email</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th>Password</th></div>
                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><th></th></div>
                    </tr></div>
                    <?php
                      require 'db.php';
                    $sql="select * from host order by id limit 10";
                    $result=$conn->query($sql);
                   $i=1;
                    while($row=$result->fetch_assoc()){?>
                    <tr>
                        <div class="row">

                   <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php  echo $i; $i++; ;?></td>
    </div>               <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['name'];?></td>
   </div>                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['age'];?></td>
    </div>               <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['Gender'];?></td>
 </div>                  <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['city'];?></td>
   </div>                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['email'];?></td>

  </div>                 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"> <td><?php echo $row['password'];?></td></div>
                       <td> <a href="managehost.php?id=<?php echo $row['id'] ?>">
                          <span class="label label-primary">Remove</span></a></td>
                    </tr>
                    <?php }?>   
               </table>
                
                         <center>
                        <a href="addhost.php" class="mybutton">Add Host</a>
                      
                      </center>
       </div>
       
</body>
</html>