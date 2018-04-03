<DOCTYPE html>
  <html lang="en">
    <head>
      <title>Add Host</title>
      <?php
    require 'db.php';
  if(isset($_POST['email'])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $city=$_POST["city"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $password=$_POST["password"];
   
    $sql="insert into host(name,age,Gender,city,email,admin,password) values('$name','$age','$gender','$city','$email','0','$password')";
    $result=$conn->query($sql);
    header('Location:managehost.php');
}

       include("header.php");
      ?>
    </head>
    <body>
      <?php include("nav1.php");
        ?>
        <div class="container">
            <div class="headercreateform" id="header">
                <center>
                <h1>Add Host</h1>
                </center>
                <form class="createform" action="addhost.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" class="form-control" placeholder="Age" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </div>
                    <button type="submit" name="submit" class="mybutton">Submit
                        </button>             
                </form>
            </div>        
        </div>    
      </body>
    </html>
</DOCTYPE>