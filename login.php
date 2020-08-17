<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

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

<div>
	
</div>
<div class="registrationDiv">
<h1>Login</h1>

<form method="POST">
	<label><b>Email:</b></label><br>
	<input class="fields" type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Password:</b></label><br>
	<input class="fields" type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input class="button1" type="submit" name="submit" value="Login"></input>
</form>
</div>
<?php
	$dbServername = "localhost";
	$dbUsername="root";
	$dbPassword ="";
	$dbName = "suits";
	
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
	if(isset($_POST['submit'])){
		$email = $_POST["email"];
		$password = $_POST["password"];
	}
	$select = mysql_query($conn, "select * from 'users'"); //query to select all rows from users table
	while($result=mysql_fetch_arrayi($select)){
		$mail = $result['email'];
		$passwords = $result['password'];
		
		if($passwords!=$password || $mail!=$email){
			echo "Try again, email or password is incorrect.";
		}
		else{
			echo "Login Successful";
		}
	}
?>
</body>
</html>