<?php
//CONNECT TO DATABASE
require 'config.php';

//HEADER FILE
require 'header.php';

//GET VALUE POST
if(isset($_POST['add'])) {
	$Cat = $_POST['cat'];
	$RM = $_POST['rm'];
	//ADD NEW VALUE INTO ROW
	mysqli_query($samb,"INSERT INTO categories (idcat,category,price) VALUES (NULL,'$Cat','$RM')");
	//DISPLAY MSG
	echo "<script>alert('NEW CATEGORY $ PRICE ADDED');window.location='category.php'</script>";
}
?>

<html>
<center>
	<body>
		<h2>ADD NEW CATEGORY & PRICE</h2>
		<form action="category_add.php" method='POST' enctype="multipart/form-data">
			<table width="700" border="1" align="center">
				<tr>
					<td width="200">CATEGORY NAME</td>
					<td width="400"><input type="text" name="cat" id="cat" placeholder="Type" required ></td>
				</tr>
				<tr>
					<td width="200">PRICE</td>
					<td width="400"><input type="money" name="rm" id="rm" placeholder="Price" required ></td>
				</tr>
			</table>	
			<br><br><input type="submit" name="add" id="add" value="ADD CATEGORY" />		
		</form><br><br>
		<a href="category.php">BACK</a><br><br>
		<a href="category.php">PRICE LIST</a><br>
	</body>
</center>
</html>