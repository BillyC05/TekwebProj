<?php
	session_start();
	include 'connect.php';
	
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
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"></head>
<body>
	<div class="container">
	<?php
		$index=0;
		echo "<div class='row'>
					<div class='col-sm-1'>
					</div>
					<div class='col-sm-3'>
						Item
					</div>
					<div class='col-sm-4'>
						Item-name
					</div>
					<div class='col-sm-2'>
						Quantity
					</div>
					<div class='col-sm-2'>
						Notes
					</div>
				</div>";
		foreach($_SESSION['cart_id'] as $productID){
			$sql_getName="SELECT title, image FROM products WHERE id=$productID";
			$result=mysqli_query($conn, $sql_getName);
			$name=mysqli_fetch_assoc($result);
			echo "<div class='row'>
						<div class='col-sm-1'>".$productID."</div>
						<div class='col-sm-3'><img src='".$name['image']."' style='margin:auto; width:50px; height:auto;'/></div>
						<div class='col-sm-4'>".$name['title']."</div>
						<div class='col-sm-2'>".$_SESSION['cart_quantity'][$index]."</div>
						<div class='col-sm-2'>".$_SESSION['cart_color'][$index]."</div>
					</div>";
			$index++;
		}		
		echo "</table>";

	?>
	<br>
	<br>
	<div class='row'>
		<div class="col-sm-8"></div>

		<div class="col-sm-4">
		Subtotal:
		<p id="total"></p>
		</div>
	</div>
	<br>
	<div class='row'>
		<div class='col-sm-2'> Payment method: </div>
		<div class='col-sm-1'> </div>
		<div class='col-sm-4'>Shipping method: </div>
		<div class='col-sm-2'></div>
		<div class='col-sm-3'></div>
	</div>

	<div class='row'>
		<form>
			<div class='col-sm-1'><input type="radio" name="payment-type" value="paypal" id="paypal">
				<label for="paypal"><i class="fa fa-cc-paypal" style="font-size: 24px;"></i></label>
			</div>
			<div class='col-sm-1'>
				<input type="radio" name="payment-type" value="mastercard"><i class="fa fa-cc-mastercard" style="font-size: 24px;"></i>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<select style='width: 100px;'>
					<option class="active">JNE </option>
					<option> TIKI</option>
					<option> J&T</option>
					<option> Wahana</option>
				</select>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-3"><button class="btn btn-success" type='submit'>SUBMIT</button></div>
		</form>
	</div>
</body>
</html>