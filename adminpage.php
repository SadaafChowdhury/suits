<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
	
</script>
</head>

<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#news">Products</a></li>
  <li><a href="#contact">Cart</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div class="users">
	<?php
	include_once('config.php');
	
	$sql = "SELECT id, name, email, number, address
			FROM users
			ORDER BY id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>"." ";
			echo "<td>".$row['name']."</td>"." ";
			echo "<td>".$row['email']."</td>"." ";
			echo "<td>".$row['number']."</td>"." ";
			echo "<td>".$row['address']."</td>"." ";
			echo "</tr>";
			echo "<br>";
		}
	} else {
		echo "0 results";
	}
?>
</div>

<div class="orderlist">
dsds
</div>

<div class="addProducts">
dfdf
</div>

</body>
</html>