<?php
	require_once('connect.php');
	$query = "SELECT * FROM product";

	$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<table cellpadding="5px" cellspacing="3px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Descripton</th>
			<th>Timestamp</th>
		</tr>
		<tr>
			<?php 
				while ($row = mysqli_fetch_array($result)) {
			 		
			 		$id = $row['id'];
			 		$name = $row['name'];
			 		$price = $row['price'];
			 		$descripton = $row['description'];
			 		$timestamp = $row['timestamp'];
			 		$img = $row['image'];
					echo"
						<tr>
							<td>$id</td>
							<td><a href='updateproduct.php?id=$id'>$name</a></td>
							<td>$price</td>
							<td>$descripton</td>
							<td><img height= 100 width=200 src='$img'></td>
							<td>$timestamp</td>
							<td><a href='php/deletehelper.php?id=$id'>delete</a></td>
						</tr>
						";		 	
				} 
			 ?>
		</tr>
	</table>
</body>
</html>


