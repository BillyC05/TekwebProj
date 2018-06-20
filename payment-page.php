<?php
	session_start();
	include 'connect.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$index=0;
		echo "<table>
				<tr> 
					<th> Id </th>
					<th> Images</th>
					<th> Name </th>
					<th> quantity</th>
					<th> Notes </th>
				</tr>";
		foreach($_SESSION['cart_id'] as $productID){
			$sql_getName="SELECT title, image FROM products WHERE id=$productID";
			$result=mysqli_query($conn, $sql_getName);
			$name=mysqli_fetch_assoc($result);
			echo "<tr>
						<td>".$productID."</td>
						<td><img src='".$name['image']."' style='margin:auto; width:50px; height:auto;'/></td>
						<td>".$name['title']."</td>
						<td>".$_SESSION['cart_quantity'][$index]."</td>
						<td>".$_SESSION['cart_color'][$index]."</td>
					</tr>";

		}		
		echo "</table>";

	?>

	<form>
		<input type="radio" name="payment-type" value="paypal"><i class="fa fa-paypal"></i>
		<input type="radio" name="payment-type" value="mastercard"><i class="fa fa-mastercard"></i>
		<button class="btn btn-success" type='submit'>SUBMIT</button>
	</form>
</body>
</html>