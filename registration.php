<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<div>
	
</div>

<h1>Registration</h1>
<p>Please fill up the form.</p>
<form action="signup.php" method="POST">
	<label><b>Name:</b></label><br>
	<input type="text" placeholder="Enter Name" name="name" id="name" required><br><br>
	<label><b>Email:</b></label><br>
	<input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Phone Number:</b></label><br>
	<input type="text" placeholder="Enter Number" name="number" id="number" required><br><br>
	<label><b>Address:</b></label><br>
	<input type="text" placeholder="Enter Address" name="address" id="address" required><br><br>
	<label><b>Password:</b></label><br>
	<input type="text" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input type="submit" name="create" value="Sigh Up"></input>
</form>
</body>
</html>