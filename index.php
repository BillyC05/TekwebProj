<?php
	require_once "connect.php";
	$sql = "SELECT * FROM products WHERE featured=1";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql);
?>
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
			<?php while($product = mysqli_fetch_assoc($result)) : ?>
			<div class="col-md-3">
				<h4><?=$product['title']; ?></h4>
				<img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images">
				<p class="price">Price: Rp<?=$product['price']; ?></p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?=$product['id']; ?>">Details</button>
			</div>

		<?php endwhile; ?>

			
		</div>
	<!--details modal-->
	<?php while($product = mysqli_fetch_assoc($result2)) : ?>
		<div class="modal fade details-1" id="details-<?=$product['id']; ?>" tableindex="-1" role="dialog" >
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title text-center"><?=$product['title']; ?></h4>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">
									<div class="center-block">
										<img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" class="details img-responsive">
									</div>
								</div>
								<div class="col-sm-6">
									<h4>Details</h4>
									<p><?=$product['description']; ?></p>
									<hr />
									<p>Price : Rp <?=$product['price']; ?></p>
									<p>Brand : <?php 
													$sql2 = "SELECT * FROM brands WHERE id=".$product['brand'];
													$brandArray = $conn->query($sql2);
													while($brandName = mysqli_fetch_assoc($brandArray)) :
														echo $brandName['brand'];
													endwhile;
												 ?> </p>
									<form action="add_cart.php" method="post">
										<div class="form-group">
											<div class="col-xs-3">
												<label for="quantity" id="quantity-label">Quantity</label>
												<input type="text" class="form-control" id="quantity" name="quantity">
											</div><br><br>
											<div class="form-group">
												<label for="LED Color">Color</label>
												<select name="ledColor" id="ledColor" class="form-control">
													<option value=""></option>
													<?php
														$color=explode(',', $product['color']);
														foreach ($color as $eachColor) {
															echo "<option value=' ".$eachColor."'>".$eachColor."</option>";
														}
													?>
													
												</select>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal">Close</button>
							<button class="btn btn-warning" type="submit"> <span class='glyphicon glyphicon-shopping-cart'>Add To Cart</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>	
	<!--end detail modal-->
</body>
</html>