<!DOCTYPE html>
<?php
   include('session.php');
?>
<html>
<head>
<title>Suits</title>
<!-- Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	
</script>
</head>

<body>
<!-- Navigation bar-->

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="aboutus.html">About Us</a></li>
  <li><a href = "logout.php">Sign Out</a></li>
  <li style="float: right;"><a href = "#">Welcome <?php echo $login_session; ?></a></li>
</ul>

<!-- SlideShow-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cover1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cover2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cover3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br>
<div class="article">
	<p>
		Do you like Mens Suits? Take a moment and think about it. Mens Suits can be many things in terms of men's apparel.
		They have been around for since the 17th century in one form or another. Mens Suits of course are nothing more than
		a jacket that buttons and a matching pair of slacks. If you're a frequent Church Goer, you know you need something
		proper to wear and look good too. That's where the Church Suit comes to play. A Church Suit is a men's suit that is
		generally more fashionable than your boring old business suit. A suit is more than just clothing for a man. It's a
		way of expression like no other. The suit is and always will be a matching set of clothes for a man that has become
		the uniform of civilization and business.

	</p>
</div>
 

<!-- Footer-->
<br><br>
<div class="footer">
  <p>Contact us on: </p>
  <p>All rights reserved 2020</p>
</div>
</body>
</html>