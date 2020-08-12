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

<form action="signup.php" method="POST">
	<label><b>Email:</b></label><br>
	<input class="fields" type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Password:</b></label><br>
	<input class="fields" type="text" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input class="button1" type="submit" name="create" value="Login"></input>
</form>
</div>

</body>
</html>