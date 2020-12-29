<?php
$con=mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,"carusers");
?>
<html>
<head>
</head>
<style>
/* Bordered form */
form {
    border: 3px solid black;
    border-radius: 20px;
    background-color: grey;
    padding: 20px;
    margin: auto;
    width: 500px;
    float: center;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
form {
    border: 3px solid black;
    border-radius: 20px;
    background-color: grey;
    padding: 30px;
    margin: auto;
    width: 450px;
    float: center;

/* Set a style for all butto2s */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 500%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;

}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}


    .cancelbtn {
        width: 200px;
        margin-top: auto;
    }
}
</style>

<body style="background-color: #7f8c8d" background="images/back.jpg">
  <div id="main-wrapper">
    <center>
    <img src="images/login.png" class="avatar"/>
  </center>
<form action="signin.php" method="post">
 
<h1><center>Sign in </center></h1>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required/>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required/>

    <center><button type="submit" name="signin" class="cancelbtn">SIGN IN</button></center>
	
   
  </div>
  
	Not it member?<a href="signup.php"><center><button type="button" class="cancelbtn">SIGN UP</button></center></a>
</form>
</html>

<?php
if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query="select * from users WHERE username='$username' AND password='$password'";

    $query_run=mysqli_query($con,$query);
    if (mysqli_num_rows($query_run)>0) {
        header("location:home.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("invalid credential")</script>';

    }
}
?>



