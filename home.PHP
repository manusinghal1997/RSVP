

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soiree</title>
  <link href="Libraries\css\bootstrap.min.css" rel="stylesheet">
    
<script> 
   $window.scrill(function(){
  if($(document).scrollTop()>50){
  $('nav').addClass('shrink');
  }
  else{
  $('nav').removeClass('shrink');
  }
  });

</script>      <!-- HTML5 shim and Respond.js for IE8 support of HTML5
elements and media queries -->     <!-- WARNING: Respond.js doesn't work if
you view the page via file:// -->     <!--[if lt IE 9]>       <script
src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->   </head>   <body>   
    <?php include 'nav.php';
      
      include 'header.php';
        include 'db.php';
        if(isset($_GET['event_id'])){
        $event_id=$_GET['event_id'];
        $sql="select * from events where id='$event_id'";
        $result=$conn->query($sql);
        if($row=$result->fetch_assoc())
       {     $date=$row['date'];
        $theme=$row['theme'];
        $time=$row['time'];
        $venue=$row['venue'];
      }
    }
        else
          $sql="select * from events limit 1";
        $result=$conn->query($sql);
          if($row=$result->fetch_assoc())
       {     $date=$row['date'];
        $theme=$row['theme'];
        $time=$row['time'];
        $venue=$row['venue'];
      }


    ?>
  


<div class="container-fluid" id="body" style="margin-top: 60px; ">
 <div class="row">
              <div class="col-sm-4">
              <div style="font-size:40px; margin-top: 100px;"><?php echo $date ?></div>
              <br>
              <br>
          <h1>
            <span class="label label-primary">
            <?php echo $theme ?>
            </span>
                </h1>
              <br>
              <br>
              <font size="5px">by Soiree</font>
             <br>
                  <h3>At <?php echo $venue ?><br>
                  <?php echo $time ?></h3>
              </div>
            <div class="col-sm-8">
                <?php include("slide.php");?>
              </div></div>
          
          
      
      <h2>Colored Cow Organizing Soiree</h2>
      <p>
      ColoredCow is organizing <i><b>Soiree</b></i> every first Saturday of the month in this we meet for a conversation filled evening - Soiree. There are theme parties/get-togethers where we are invites our friends, family and other like-minded people who would like to have some meaningful conversations. Anyone interested candidate can join us by justing filling a simple form.
      </p>
     </div>         

 <marquee scrollamount=10>
  <img src="image/slide/1.jpg" width="40%" height="40%">
    <img src="image/slide/2.jpg" width="40%" height="40%">
      <img src="image/slide/3.jpg" width="40%" height="40%">
        <img src="image/slide/4.jpg" width="40%" height="40%">
          <img src="image/slide/5.jpg" width="40%" height="40%">
            <img src="image/slide/6.jpg" width="40%" height="40%">
              <img src="image/slide/7.jpg" width="40%" height="40%">
                
 </marquee>

<?php include 'footer.php' ?>

<!--Login modal -->
<div class="modal" id="login" role="dialog">
  <div class="modal-dialog" >   
     <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
           <h1 class="modal-title" style="font-weight: bold;">Login</h1>
         
        </div>
        <div class="modal-body">
              <form method="post" action="verify.php?event_id=$event_id">
                <div class="input-group">
                 
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
                </div>

                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                </div>
              </div>
                  
                     <div class="modal-footer">
            <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
              <button type="button" class="mybutton btn-lg" data-dismiss="modal">Cancel</button>
              </div>
              <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
              <button type="submit" class="mybutton btn-lg">Submit</button>
              </div></div>
              </div>
               </form>
      
    </div>
  </div>
</div>
<!-- Login modal ends -->

<!-- Get invite modal starts -->
  <div class="modal" id="getinvite" class="modalprop" role="dialog">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header"  id="modal-header"  >
          <button type="button" class="close" data-dismiss="modal">&times</button>
          <h3 class="modal-title" style="font-weight: bold;">Get Invite Form</h3>
        </div>
        <div class="modal-body ">
          <form method="post" action="getinvite.php?event_id=<?php echo $event_id ?>">
              <input type="text" class="input-lg form-control" placeholder="Name" name="name">
            <br>
              <input type="text" class="input-lg form-control" placeholder="city" name="city">
            <br>
              <input type="text" class="input-lg form-control" placeholder="age" name="age">
                <br>
              <input type="email" class="input-lg form-control" placeholder="Email" name="email">
            
               <input type="radio" name="gender" value="Male"  ><font size="5px">Male</font>
                <input type="radio" name="gender" value="Female"><font size="5px">Female</font>
                  <br>
          </div>
            <div class="modal-footer">
            <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
              <button type="button" class="mybutton btn-lg" data-dismiss="modal">Cancel</button>
              </div>
              <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
              <button type="submit" data-target="#getinvitethanks" class="mybutton btn-lg">Submit</button>
              </div></div>
            </div>
          </form>
        
      </div>
    </div>
  </div>
  <!-- Get Invite modal ends -->

  <!--RSVP Modals starts -->
  <div class="modal" id="rsvp" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times</button>
          <h3 class="modal-title" style="font-weight: bold;">Your Response</h3>
          
          </div> 
             <div class="modal-body">
                 <form method="post" action="responsedb.php?event_id=<?php echo $event_id ?>">
                 


                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input type="text" class="form-control input-lg" placeholder="Name" name="name" required>
                </div><br>
                     <div class="input-group">
                 
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
                </div>
              
               </div>
               <div class="modal-footer">      
                        <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
             
                 <button type="submit" name="t" class="mybutton btn-lg">
                     
                          Accept With Pleasure
                      </button>
                      </div>
                       <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
          
                         <button type="submit" name='f' class="mybutton btn-lg">
                          
                      Decline With Regret
                          
                               </button>                             
                  </div></div>
                </form>
            </div>
        
      </div>
   </div>
 </div>   
        <!-- RSVP Modal ends -->

  <!--Upcomine modals starts -->
<div class="modal" id="upcoming" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times</button>
          <h3 class="modal-title" style="font-weight: bold;">UpComing Events</h3>
         </div>
      <div class="modal-body">
       
         <table class="table table-hover" >
        <tr><th>S.No.</th>
          <th>Theme</th>
          <th>Date</th>
          <th>Time</th>
          <th>Venue</th>

          
        </tr>
        <?php 
           require 'db.php';
            $date=date("Y-m-d");
           $sql="select * from events where date>=$date limit 10";

           $result=$conn->query($sql);
           $i=1;
           while($row=$result->fetch_assoc()){
        ?>       
        <tr onclick='window.location="home.php?event_id=<?php echo $row['id'] ?>";'>
          <td><?php echo $i; $i++; ?></td>
          <td><?php echo $row['theme']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['venue']; ?></td>
        </tr>
          
        <?php
                                             }
        ?>
      </table>
               
             </div><div class="modal-footer"> 
               <button type="button" data-dismiss="modal" class="mybutton btn-lg">Back</button>  
             
          </div>  
       </div>
   </div>
</div>


    

<!-- Thankyou Modal -->
<div class="modal" id="thankyou" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close " data-dismiss="modal">&times</button>
                  <h3 class="modal-title">Thankyou</h3>
           </div>
           <div class="modal-body">
               <h1>Thankyou for your response</h1>
            </div>
             <div class="modal-footer">
             <button type="button" class="mybutton btn-lg" data-dismiss="modal">Go Back</button>  
             </div>     
       </div>
     </div>
</div>
    
    <!-- Thankyou Modal -->
<div class="modal" id="getinvitethanks" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times</button>
          <h3 class="modal-title">Thankyou</h3>
         </div>
        <div class="modal-body">
                     <h1>We will respond soon for your request.</h1>
        </div>
            <div class="modal-footer">
              <button type="button" class="mybutton btn-lg" data-target="home.php">Go Back</button>
            </div>
       </div>
     </div>
</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>