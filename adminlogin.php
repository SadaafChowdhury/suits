<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script>

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
</script>
</head>


<body style="background-color:#DAF7A6;">

<div class="registrationDiv">
<h1>Admin Login</h1>

<form method="POST">
	<label><b>Email:</b></label><br>
	<input class="fields" type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Password:</b></label><br>
	<input class="fields" type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input class="button1" type="submit" name="submit" value="Login"></input>
</form>
	<br><br>
	<a class="loginLinks" href="login.php">User Login</a>
	<a class="loginLinks" href="registration.php">Registration</a>
</div>
<?php
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  if($email == "admin@gmail.com" and $password == "admin") {
         
         header("location: adminpage.php");
      }
}
	
?>
</body>
</html>