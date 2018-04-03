
 <nav class = "navbar navbar-default
navbar-inverse navbar-fixed-top" role = "navigation">    <div class="container">

   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = ".navbar-collapse">
         <span class = "sr-only" >MENU</span>
         <span class = "icon-bar"> </span>
         <span class = "icon-bar" ></span>
         <span class = "icon-bar"></span>
      </button>
    
    <a class = "navbar-brand" href = "home.php?event_id=<?php echo $event_id; ?>" style="font-size:50px; padding:15px; color:black; ">
       SOIREE
      </a>
      </a>
   </div>

            <div class="navbar-collapse collapse" id="collapse">
          <ul class="nav navbar-nav navbar-right"> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#getinvite" style="font-size:20px; color:black;">GET INVITE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="modal" data-target="#rsvp" style="font-size:20px;color:black;">RSVP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="career.html" data-toggle="modal" data-target="#upcoming"  style="font-size:20px;color:black;">UPCOMING EVENTS</a>
          </li>
          </li><li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#login" href="client.html" style="font-size:20px;color:black;">LOGIN</a>
          </li>
         
        </ul>    
    
           </div>
</div></nav>
