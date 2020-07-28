<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL HEADER
require('header.php');

//GET THE ID FROM THE URL
$IdStaff = $_GET['staffid'];

//DISPLAY OLD RECORD
$result = mysqli_query($samb,"SELECT * FROM staff WHERE idstaff = '$IdStaff'");
while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$pass = $res['pass'];
}
if (isset($_POST['update'])) {
	$name = $_POST['staffname'];
	$pass = $_POST['pass'];

	//SAVE WITH THE NEW VALUE
	$result = mysqli_query($samb , "UPDATE staff SET name = '$name', pass='$pass',levels=levels WHERE idstaff='$IdStaff'");

	//DISPLAY THE MSG
	echo "<script>alert(\"RECORD SUCCESFULLY UPDATED\"); window.location='staff.php'</script>";
}
?>

<html>
<center>
	<body>
		<h2>UPDATE STAFF RECORD</h2>
		<form method="post" enctype="multipart/form-data">
			<table width="700" border="1" align="center">
				<tr>
					<td width="200">STAFF NAME : </td>
					<td width="400"><input type="text" name="staffname" id="staffname" size="50" value="<?php echo $name ?>" AUTOFOCUS /></td>
				</tr>
				<tr>
					<td width="200">PASSWORD</td>
					<td width="400"><input type="text" name="pass" id="pass" value="<?php echo $pass ?>" /></td>
				</tr>
			</table>			
			<input type="submit" name="update" id="submit" value="UPDATE NOW" />
		</form>
		<a href="staff.php">STAFF LIST</a>
	</body>
</center>
<?php require('footer.php'); ?>
</html>