<?php
$con=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,"carusers");
?>
<html>
<head>
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
form {
    border: 3px solid black;
    border-radius: 20px;
    background-color: grey;
    padding: 20px;
    margin: auto;
    width: 450px;
    float: center;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 22px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 50%;
}

</head>
</style>
<body>
  <html>
<head>
  <title> Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<style type="text/css">
  body{
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 200px;
  }
</style>
<body style="background-color: #7f8c8d" background="images/back.jpg">
  <div id="main-wrapper">
    <center><h2>Registration Form</h2>
    <img src="images/login.png" class="avatar"/>
  </center>
     
  <form method="post" action="">
   
  
  <div class="form-group">
  <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" class="form-control" name="username" id="uname" required/>
  </div>

  <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required/>
  </div>

  <div class="form-group">
    <label for="phoneno"><b>Phone No</b></label>
    <input type="text" placeholder="Enter phoneno" name="phoneno" id="phoneno" required/>
  </div>

  <div class="form-group">
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required/>
  </div>

  
  <div class="form-group">
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required/>
  </div>
  
  <div class="form-group">
    <label for="confirm password"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirmpassword" id="psw-repeat" required/>
  </div>

    <div class="clearfix">
      
    <center><button type="submit" name="register" class="cancelbtn">Click Me</button></center>
            

     
    </div>
    <p>
      Already a member?<a href="signin.php">Sign in</a> 
    </p>    
  
  </form>
  </body> 
</html>

<?php
  if (isset($_POST["register"])) {
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirm=$_POST["confirmpassword"];
    $phoneno=$_POST["phoneno"];
    $address=$_POST["address"];
    
    if ($password==$confirm){
      $query="select * from users WHERE username='$username'";
      $query_run=mysqli_query($con,$query);

      if (mysqli_num_rows($query_run)>0) {
        echo '<script type="text/javascript">alert("user Already exists")</script>';
      }
      else
      {
        $query="insert into users(username,email,password,phoneno,address) values('$username','$email','$password','$phoneno','$address')";
        //echo $query;

        if (mysqli_query($con,$query)) {
          header("location: signin.php");
          // echo '<script type="text/javascript">alert("user register successfully")</script>';
          # code...
          echo mysqli_error($con);
        }
      }
      
    }
     else
     {
      echo '<script type="text/javascript">alert("unsuccessful while registering")</script>';
    }
  }

?>