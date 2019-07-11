<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="post" action="php/addproducthelper.php" enctype="multipart/form-data">
		<p>Enter Name : <input type="text" name="name"></p>
		<p>Enter Price : <input type="text" name="price"></p>
		<p>Enter Description : <input type="text" name="description"></p>
		<p>Image : <input type="file" name="image"></p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>
</html>



<!-- INSERT INTO `product`(`id`, `name`, `price`, `description`, `image`, `timestamp`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]) -->