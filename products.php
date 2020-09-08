<!DOCTYPE html>
<?php
   include('session.php');
?>

<html>
<head>
<title>Products</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="products.php">Products</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="aboutus.html">About Us</a></li>
  <li><a href = "logout.php">Sign Out</a></li>
  <li style="float: right;"><a href = "#">Welcome, <?php echo $login_session; ?></a></li>
</ul>
<?php

$sql = "select fabricName, description, price, name 
		from products";
$result = $conn->query($sql);		
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	//$row = mysqli_fetch_array($result);
	$fabricName = $row['fabricName'];
	$description  = $row['description'];
	$price = $row['price'];
	$image = $row['name'];
	$image_src = "upload/".$image;
	
	
	echo "<div class='productBox'>";
	foreach ($productsBox as $product):
        <a href="'products.php?page=product&id='<?php=$row['id']?>" class="product">
	echo "<div class='card'>";
	echo "<img src='".$image_src."' alt='Avatar' style='width:100%'>";
	echo  "<div class='container'>";
	echo   "<h4><b>".$fabricName."</b></h4>";
	echo	"<p>".$description."</p>";
	echo	"<p>".$price."</p>";
	echo	"<input type='submit'>";
	echo  "</div>";
	echo "</div>";
	echo "</div>";
	
	}
} else {
		echo "0 results";
	}

?>


</body>
</html>