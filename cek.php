<?php
	session_start();
	if(isset($_SESSION['cart'])){
		$counter=0;
		foreach($_SESSION['cart_id'] as $productId){
       		 //Print out the product ID.
       		 echo $productId, '<br>';
       		 echo $_SESSION['cart_color'][$counter], '<br>';
       		 echo $_SESSION['cart_quantity'][$counter], '<br>';
       		 $counter++;
		}
	}	

?>