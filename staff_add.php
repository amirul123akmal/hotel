<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL HEADER
require('header.php');

//RECEIVED POST VALUE
if (isset($_POST['submit'])) {
	$idstaff = $_POST['staffname'];
	$name = $_POST['staffid'];
	$pass = $_POST['pass'];

	//ADD NEW RECORD TO TABLE
	$result = mysqli_query($samb , "INSERT INTO staff(idstaff, name , pass ,  levels) values('$idstaff','$name','$pass','STAFF')");
	//DISPLAY MSG
	echo "<script>alert('NEW RECORD ADDED'); 
	window.location='staff.php'</script>";
}
?>

<html>
<center>
	<body>
		<h2>
			REGISTER NEW STAFF
		</h2>
		<form name="form1" action="staff_add.php" method="POST">
			<table width="700" border="1" align="center">
				<tr>
					<td width="200">STAFF NAME</td>
					<td width="300"><input type="text" name="staffname" size="60" id="staffname" placeholder="Name" required autofocus /></td>
				</tr>
				<tr>
					<td width="200">USER NAME</td>
					<td width="300"><input type="text" name="staffid" size="30" id="staffid" placeholder="Username" required /></td>
				</tr>
				<tr>
					<td width="200">PASSWORD</td>
					<td width="300"><input type="text" name="pass" id="pass" placeholder="Password" required /></td>
				</tr>
			</table>
			<input type="submit" name="submit" id="submit" value="ADD NEW STAFF" />
		</form>
		<a href="staff.php">STAFF LIST</a><br>
	</body>
</center>
<?php require('footer.php'); ?>
</html>