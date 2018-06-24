<<<<<<< HEAD
<?php
	
	require "connect.php";
	$idDelete = $_GET['id'];
	$sql = 'DELETE FROM products WHERE id='.$idDelete;
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header("Location: viewProduct.php");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}	

=======
<?php
	
	require "connect.php";
	$idDelete = $_GET['id'];
	$sql = 'DELETE FROM products WHERE id='.$idDelete;
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header("Location: viewProduct.php");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}	

>>>>>>> 5f75c3bacfc01e34c6822201ccbdc807ebd124cc
?>