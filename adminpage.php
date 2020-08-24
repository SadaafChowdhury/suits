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
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Products</a></li>
  <li><a href="#contact">Cart</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div class="users">
	<?php
	include_once('config.php');
	$query = $sqlLink->query("SELECT name FROM list_users ORDER by id");
	while($row = $query->fetch_array()){
    echo "<tr>";
    echo "<td>".$row['uuid']."</td>";
    echo "<td>".$row['firstname'].$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['security_key']."</td>";
    echo "<td>".$row['phone_no']."</td>";
    echo "<td>".$row['activated']."</td>";
    echo "<td>".$row['role']."</td>";
    echo "</tr>";
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