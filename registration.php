<?php
	require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<div>
	<?php
		if(isset($_POST["create"])){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$number = $_POST["number"];
			$password = $_POST["password"];
			
			echo $name . " " . $password;
			
			$sql = "INSERT INTO users (name, email, number, password) VALUES(?,?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result = $stmtinsert->execute([$name, $email, $number, $password]);
			if($result){
				echo "Registration successful";
			}
			else{
				echo "Registration unsuccessful";
			}
		}
	?>
</div>

<h1>Registration</h1>
<p>Please fill up the form.</p>
<form action="registration.php" method="post">
	<label><b>Name:</b></label><br>
	<input type="text" placeholder="Enter Name" name="name" id="name" required><br><br>
	<label><b>Email:</b></label><br>
	<input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Phone Number:</b></label><br>
	<input type="text" placeholder="Enter Number" name="number" id="number" required><br><br>
	<label><b>Password:</b></label><br>
	<input type="text" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	
	<input type="submit" name="create" value="Sigh Up"></input>
</form>
</body>
</html>