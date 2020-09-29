<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	.registrationDiv{
		width: 400px;
		margin: auto;
		background-color:#CEE100;
		padding: 10px;
		box-shadow: 10px 10px 5px #aaaaaa;
		
	}
	.fields{
		border-radius: 20px;
		border-style:none;
		height: 30px;
	}
	.button1{
		border-radius:20px;
		height: 30px;
		width: 80px;
		background-color:#19C600;
	}
	
</style>
</head>
<body style="background-color:#F1FF64;">


<div class="registrationDiv">
<h1>Login</h1>

<form method="POST">
	<label><b>Email:</b></label><br>
	<input class="fields" type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Password:</b></label><br>
	<input class="fields" type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input class="button1" type="submit" name="submit" value="Login"></input>
</form>
	<br><br>
	<a  class="loginLinks" href="adminlogin.php">Admin Login</a>
	<a  class="loginLinks" href="registration.php">Registration</a>
</div>
<?php
	include("config.php");
    session_start();
	
	$count=0;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id 
			  FROM users 
			  WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		 
         $_SESSION['email'] = $email;
         
         header("location: index.php");
      }
	  elseif ($count==0) {
		  echo "<p style='color:black; text-align: center;'>" . "Your Login email or Password is invalid" ."</p>";
		  $count=3;
		}
	  else {
         $error = "Your Login email or Password is invalid";
		 echo "<p style='color:red; text-align: center;'>" . $error ."</p>";
      }
   }
?>
</body>
</html>