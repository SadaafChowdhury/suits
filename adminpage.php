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
	<h1>Users</h1>
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
			echo "<hr>";
		}
	} else {
		echo "0 results";
	}
?>
</div>
<br><br>
<div class="orderlist">
<h1>Orderlist</h1>
<?php
$sql = "SELECT id, fabricName, email, address
			FROM orderlist
			ORDER BY id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>"." ";
			echo "<td>".$row['fabricName']."</td>"." ";
			echo "<td>".$row['email']."</td>"." ";
			echo "<td>".$row['address']."</td>"." ";
			echo "</tr>";
			echo "<br>";
			echo "<hr>";
		}
	} else {
		echo "0 results";
	}
?>
</div>
<br><br>
<?php
include("config.php");

if(isset($_POST['addproduct'])){
  
  $fabricName = $_POST["fabricName"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into products(fabricName, description, price, name) 
			   values('$fabricName','$description','$price','".$name."')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>

<div class="addProducts">
<h1>Add Products</h1>
<form method="post" action="" enctype='multipart/form-data'>
	<label><b>Fabric Name:</b></label><br>
	<input class="fields" type="text" placeholder="Enter Fabric Name" name="fabricName" id="fabricName" required><br><br>
	<label><b>Description:</b></label><br>
	<input class="fields" style="width:250px;"  type="text" placeholder="Enter Description" name="description" id="description" required><br><br>
	<label><b>Price:</b></label><br>
	<input class="fields" type="number" placeholder="Enter Price" name="price" id="price" required><br><br>
	<input type='file' name='file' /><br><br>
	<input type="submit" name="addproduct" value="Add Product"></input>
</form>
</div>

</body>
</html>