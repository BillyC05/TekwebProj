<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5f75c3bacfc01e34c6822201ccbdc807ebd124cc
=======
>>>>>>> 5f75c3bacfc01e34c6822201ccbdc807ebd124cc
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
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5f75c3bacfc01e34c6822201ccbdc807ebd124cc
=======

>>>>>>> 5f75c3bacfc01e34c6822201ccbdc807ebd124cc
?>