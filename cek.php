<<<<<<< HEAD
<<<<<<< HEAD
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

=======
<?php
	session_start();
	if(isset($_SESSION['cart'])){
		#print_r(array_keys($_SESSION['cart_id']));
		#print_r(array_keys($_SESSION['cart_color']));
		#print_r(array_keys($_SESSION['cart_quantity']));
		#echo $_SESSION['cart_id'][1];
		echo $size=sizeof($_SESSION['cart_id']);
		for($i=0; $i<$size;$i++){
			
       		 echo $_SESSION['cart_id'][$i], '<br>'; 
       		 echo $_SESSION['cart_color'][$i], '<br>';
       		 echo $_SESSION['cart_quantity'][$i], '<br>';
       		 
		}
	}	

>>>>>>> Christopher
=======
<?php
	session_start();
	if(isset($_SESSION['cart'])){
		#print_r(array_keys($_SESSION['cart_id']));
		#print_r(array_keys($_SESSION['cart_color']));
		#print_r(array_keys($_SESSION['cart_quantity']));
		#echo $_SESSION['cart_id'][1];
		echo $size=sizeof($_SESSION['cart_id']);
		for($i=0; $i<$size;$i++){
			
       		 echo $_SESSION['cart_id'][$i], '<br>'; 
       		 echo $_SESSION['cart_color'][$i], '<br>';
       		 echo $_SESSION['cart_quantity'][$i], '<br>';
       		 
		}
	}	

>>>>>>> master
?>