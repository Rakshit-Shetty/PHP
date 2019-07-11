<?php 
	require_once('../connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM `product` WHERE id=$id";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		# code...
		echo "Not found!";
	}
	else
	{
			echo "Deleted!";
	}
 ?>