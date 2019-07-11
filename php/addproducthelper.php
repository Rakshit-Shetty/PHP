<?php 
	
	require_once('../connect.php');

	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$imgname = $_FILES['image']['name'];
	$imgdata = $_FILES['image']['tmp_name'];
	$path = "../upload/".$imgname;
	$upresult= file_put_contents($path, file_get_contents($imgdata));
	if ($upresult) {
		# code...
		echo "Uploaded!";
	}
	$pathonserver = "upload/".$imgname;

	$query = "INSERT INTO `product`( `name`, `price`, `description`,`image`) VALUES ('$name',$price,'$description','$pathonserver')";
	$result	= mysqli_query($conn, $query);
	if (!$result) {
			# code...
			echo "<h1>Data not inserted!</h1>";
	}
	else {
			# code...
			echo "<h1>Data Inserted!</h1>";
	}	
 ?>