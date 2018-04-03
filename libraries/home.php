<DOCTYPE html>
<html lang="en">
	    <head>
	      <title>Home</title>
	      <?php include("header.php");?>
	   </head>
	<body>
	  
		<?php include 'nav.php';
      include 'modals.php';
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
        die("<html><h1>No new event is created.</h1></html>");
    ?>
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4">
              <font size="30px"><?php echo $date ?></font>
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
        <footer>
            <hr>
        <div class="row">
            <div class="col-lg-3" >
                <p style="padding-left:15px;">
                <b>Contact Us</b><br>
                5/398,Mishran Street<br>
                Saharanpur<br>
                247001<br>
                UttarPradesh<br>
                manusinghal1997@gmail.com<br>
                </p>
            </div>
            <div class="col-lg-6">
                <a data-toggle="modal" data-target="#getinvite"><h1>Click Here to Get Regular Updates of Soiree
                    </h1></a>
                  
            </div>
        </div>
        </footer>
      







      <!-- Modals are defined in this section -->


<!--Login modal -->
<div class="modal" id="login" role="dialog">
  <div class="modal-dialog" >   
     <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
            <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
              <form method="post" action="verify.php">
                <div class="input-group">
                 
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                </div>
              </div>
                  <div class="modal-footer" >
                   <button type="button" class="mybutton btn-lg" data-dismiss="modal">Cancel</button>
                   <button type="submit" class="mybutton btn-lg" name="login">Submit</button>
           
                  </div>
               </form>
      
    </div>
  </div>
</div>
<!-- Login modal ends -->

<!-- Get invite modal starts -->
  <div class="modal" id="getinvite" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" id="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times</button>
          <h3 class="modal-title">Get Invite Form</h3>
        </div>
        <div class="modal-body">
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
            <div class="modal-footer" >
              <button type="button" class="mybutton" data-dismiss="modal">Cancel</button>
              <button type="submit" data-target="#getinvitethanks" class="mybutton">Submit</button>
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
           <div class="modal-title">Your Response</div>
          </div> 
             <div class="modal-body">
                 <form method="post" action="responsedb.php?event_id=<?php echo $event_id ?>">
                 


                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input type="text" class="form-control input-lg" placeholder="Name" name="name" required>
                </div>
                     <div class="input-group">
                 
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
                </div>
              
               </div>
               <div class="modal-footer">      
                  
                 <button type="submit" name="t" class="mybutton">
                     
                          Accept With Pleasure
                      </button>
                         <button type="submit" name='f' class="mybutton">
                          
                      Decline With Regret
                          
                               </button>                             
                  
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
         <h3 class="modal-title">Upcoming Events</h3>
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
               <button type="button" data-dismiss="modal" class="mybutton">Back</button>  
             
          </div>  
       </div>
   </div>
</div>


    

<!-- Thankyou Modal -->
<div class="modal" id="thankyou" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
                  <h3 class="modal-title">Thankyou</h3>
           </div>
           <div class="modal-body">
               <h1>Thankyou for your response</h1>
            </div>
             <div class="modal-footer">
             <button type="button" class="mybutton" data-dismiss="modal">Go Back</button>  
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
              <button type="button" class="mybutton" data-target="home.php">Go Back</button>
            </div>
       </div>
     </div>
</div>
    
</body>
</html>