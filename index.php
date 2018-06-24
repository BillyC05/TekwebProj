<?php
	session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']='empty';
		$_SESSION['cart_id']=array();
		$_SESSION['cart_quantity']=array();
		$_SESSION['cart_color']=array();
		$_SESSION['price']=0;
		
	}
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
  
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css">

	<!-- To make sure page is not broken on mobile phone !-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

</head>
<body id="page-top" style="background-color: white;">
  
  

  <!-- NavBar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#page-top">OnlineShop</a>
        </div>
        <form class="navbar-form navbar-left" action="#search#" style="width:850px; margin-left:100px;">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Online Shop" style="width:600px !important;"/>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <button class="btn btn-success" type="button" data-target="#shopcart" data-toggle="modal" style="margin-top:5px; margin-right:5px;"><i class="fa fa-shopping-cart" style="font-size:24px; color: white;"></i></a>
          </li>
        </ul>
      </div>
    </nav>

  <?php
  	include "navbar.php";
  ?>



	<!-- Carousel -->
		<div class="carousel slide" data-slide="carousel" id="carousel-1">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-1" data-slide-to="1"></li>
				<li data-target="#carousel-1" data-slide-to="2"></li>
			</ol>

			<!-- Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/product2.png" alt="Item #1" style="height:100% !important; margin:auto;">
				</div>
				<div class="item">
					<img src="images/product2.png" alt="Item #2" style="height:100% !important; margin:auto;">
				</div>
				<div class="item">
					<img src="images/product2.png" alt="Item #3" style="height:100%!important; margin:auto;">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-1" data-slide="prev" style="background-image: none;">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#carousel-1" class="right carousel-control" data-slide="next" style="background-image: none;">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- Carousel end -->

		<!-- Centre -->
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
	</div>

	

	<!--	Blank space		--> 
	<div class="col-md-10" style="margin: 100px;">
		<a href="destroy.php"><button>Destroy</button></a>
		<a href="cek.php"><button>Print</button></a>
			
	</div>
	<!--	End Blank Space -->

	<!--details modal-->
	<?php
		include "detail-modal-products.php"
	?>
	<!--end detail modal-->
    
    <!-- Shopping cart -->
		<?php
			include "shoppingcart.php"
		?>
	<!-- Shopping cart ends -->
	
	<!-- Start script add to Cart -->
		<script>
			$(document).ready(function(){
				
			});
				
			function addtoCart(id_product,quantity_product,color_product) {
					alert(id_product);
					if(!quantity_product=="" && !color_product==""){
						alert(quantity_product);
						alert(color_product);
						$.ajax({

					            type: "POST",
					            url: "pass_value.php",
					            data: {
					            	id: id_product,
					            	quantity_product: quantity_product,
					            	color_product: color_product
					            },
					            dataType: 'json',
					            cache: false,
					            success: function(response) {

					                    alert(response.message);

					            }

						});			
					}	
			}

			function deleteArray(index_array) {
				$.ajax({

					            type: "POST",
					            url: "delArray.php",
					            data: {
					            	index_array: index_array,
					            },
					            dataType: 'json',
					            cache: false,
					            success: function(response) {

					                    alert(response.message);

					            }

				});		
			}

		</script>
    <!-- End script add to Cart -->
</body>
</html>

