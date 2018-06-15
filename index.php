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

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- To make sure page is not broken on mobile phone !-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">

</head>
<body id="page-top">
    <!-- NavBar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#page-top">OnlineShop</a>
        </div>
        <form class="navbar-form navbar-left" action="#search#">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Online Shop" id="navSearchBar"/>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#shoppingcart#"><i class="fa fa-shopping-cart" style="font-size:24px; margin-top: -5px; color: white;"></i></a>
          </li>
        </ul>
      </div>
    </nav>

		<!-- Carousel -->


		<!-- Centre -->
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
