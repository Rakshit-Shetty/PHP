<?php 
	require_once('../connect.php');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];

	$query = "UPDATE `product` SET `name`='$name',`price`=$price,`description`='$description' WHERE id=$id";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		# code...
		echo "Not found!";
	}
	else
	{
			echo "Updated!";
	}
 ?>