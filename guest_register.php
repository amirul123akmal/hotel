<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL HEADER
require('header.php');

//RECEIVED POST VALUE
if (isset($_POST['guestname'])) {
	$name = $_POST['guestname'];
	$icguest = $_POST['guestic'];
	$hpnum = $_POST['guesthpnum'];

	//ADD NEW RECORD TO TABLE
	$result = mysqli_query($samb , "INSERT INTO guest(icguest, name , hpnum) VALUES('$icguest','$name','$hpnum')");
	//DISPLAY MSG
	echo "<script>alert('NEW RECORD ADDED'); 
	window.location='guest.php'</script>";
}
?>

<html>
<center>
	<body>
		<h2>
			REGISTER NEW GUEST
		</h2>
		<form name="form1" action="guest_register.php" method="POST">
			<table width="700" border="1" align="center">
				<tr>
					<td width="200">GUEST NAME</td>
					<td width="300"><input type="text" name="guestname" size="60" id="guestname" placeholder="RAZMI BIN RAZMAN" required autofocus /></td>
				</tr>
				<tr>
					<td width="200">GUEST IC</td>
					<td width="300"><input type="text" name="guestic" size="30" id="guestic" placeholder="man88" required /></td>
				</tr>
				<tr>
					<td width="200">GUEST HP. NUMBER</td>
					<td width="300"><input type="text" name="guesthpnum" id="guesthpnum" placeholder="1234" required /></td>
				</tr>
			</table><br>
			<input type="submit" name="update" id="submit" value="ADD NEW GUEST" />
		</form>
		<a href="booking.php">BACK</a><br><br>
		<a href="guest.php">GUEST LIST</a><br>
	</body>
</center>
<?php require('footer.php'); ?>
</html>