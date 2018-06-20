<div class="modal fade" id="shopcart" role="dialog">
	<div class="modal-dialog"> 

	<!-- Modal content -->
	<div class="modal-content">
		<!-- Modal Header -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Shopping cart</h4>
		</div>

		<!-- Modal Body -->
		<div class="modal-body">
			<?php
				if(isset($_SESSION['cart'])){
					if($_SESSION['cart']=="empty"){
						echo "<p> Your shopping cart is empty</p>";
					}else{
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
					}
				}
			?>
						
		</div>

		<!-- Modal Footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-deafault" data-dismiss="modal">Back to shopping</button>
			<a class="btn btn-success" href="payment-page.php" style="font-size:18px;"><span class="fa fa-shopping-cart"></span> Proceed to Payment </a>
		</div>

	</div>
</div>