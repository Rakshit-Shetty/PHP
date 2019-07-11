<?php 
	require_once('connect.php');
	$id = $_GET['id'];
	$query = "SELECT * FROM product WHERE id=$id";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		# code...
		echo "Query not executed!";
	}
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	$price=$row['price'];
	$description=$row['description'];
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="post" action="php/updatehelper.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<p>Enter Name : <input type="text" name="name" value="<?php echo $name; ?>"></p>
		<p>Enter Price : <input type="text" name="price" value="<?php echo $price; ?>"></p>
		<p>Enter Description : <input type="text" name="description" value="<?php echo $description; ?>">></p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>
</html>