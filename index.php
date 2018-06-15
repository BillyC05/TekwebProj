<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css">

	<!-- To make sure page is not broken on mobile phone !-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">

</head>
<body>
	<!-- NAVBAR !-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Commerce Shop</a>
			<ul class="nav navbar-nav">
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">First Category <span class="caret"> </span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Jeans</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>



			</ul>
		</div>
	</nav>
	

	<!-- center -->
	<div class="col-md-1"></div>


	<!--main content of featured products-->
	<div class="col-md-10">
		<div class="row">
			<h2 class="text-center">Featured Products</h2>
			<div class="col-md-3">
				<h4>Keyboard</h4>
				<img src="images/product1.png" alt="Keyboard" id="images">
				<p class="price">Price: Rp1.550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>

			<div class="col-md-3">
				<h4>Mouse</h4>
				<img src="images/product2.png" alt="Mouse" id="images">
				<p class="price">Price: Rp550.000</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
			</div>
		</div>
	
	</div>
	<!--details modal-->
	<?php
		include "detail-modal-product1.php";
	?>
	<!--end detail modal-->
</body>
</html>