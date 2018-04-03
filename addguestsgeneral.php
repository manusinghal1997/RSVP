<DOCTYPE html>
 <html lang="en">
  <head>
        <title>Add Guests</title>

     <?php
    require 'db.php';
    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sql="insert into guests(name,age,city,email,gender) values('$name','$age','$city','$email','$gender')";
    $result=$conn->query($sql);

    header('Location:addguestsgeneral.php');
    }
    ?>

  </head>
 <body>

   <?php
   include("header.php");
   include("nav1.php");?>
<div class="container">
  <div class="headercreateform" id="header">
    <center>
         <form method="post" class="createform" action="addguestsgeneral.php">
                <h2 >Add Guests</h2><br>
                <div class="form-group">
                  <input type="text" class="input-lg form-control" placeholder="Name" name="name" required>
                </div>
                 <div class="form-group">
                  <input type="number" class="input-lg form-control" placeholder="Age" name="age" required>
                </div>
                <div class="form-group">
                  <input type="text" class="input-lg form-control" placeholder="City" name="city" required>
                </div>
                <div class="form-group">
                  <input type="email" class="input-lg form-control" placeholder="Email" name="email" required>
                </div>
                    <input type="radio" name="gender" value="Male"  ><font size="5px">Male</font>
                    <input type="radio" name="gender" value="Female"><font size="5px">Female</font>
                <br>
       
            <a href="dashboard.php">
                <button type="button" class="mybutton">Go To Dashboard</button>
                </a>
                <button type="submit" name="submit" class="mybutton">Save</button>
          </form>         
    </center>
  </div>
</div>
    

</body>
</html>