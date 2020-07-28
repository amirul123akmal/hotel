<?php
require 'config.php'; //CONNECT TO DATABASE
require 'header.php'; //WEB HEADER

$guestbefore = $_GET['icguest']; //GET THE OLD DATA
$data1 = mysqli_query($samb,"SELECT * FROM guest WHERE icguest='$guestbefore'");
while ($res = mysqli_fetch_array($data1)) {
	$IcGuest = $res['icguest'];
	$Name = $res['name'];
	$HpNum = $res['hpnum'];	
}

//GET THE POST VALUE
if (isset($_POST['update'])) {
	$icguest = $_POST['icguest'];
	$name = $_POST['name'];
	$hpnum = $_POST['hpnum'];

	//UPDATE WITH THE NEW VALUE
	$result = mysqli_query($samb,"UPDATE guest SET icguest='$icguest', name='$name' , hpnum = '$hpnum' WHERE icguest='$guestbefore' 
		");
	//DISPLAY MSG
	echo "<script>alert(\"RECORD SUCCESFULLY UPDATED\");window.location='guest.php'</script>";
}
?>
<html>
<center>
	<body>
		<h2> UPDATE GUEST INFORMATION</h2>
		<form method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td width="200">GUEST IC :</td>
					<td width="400"><input type="text" name="icguest" id="icguest" value="<?php echo $IcGuest; ?>" AUTOFOCUS /></td>
				</tr>
				<tr>
					<td width="200"> GUEST NAME :</td>
					<td width="400"><input type="text" name="name" id="name" value="<?php echo $Name; ?>" /></td>
				</tr>
				<tr>
					<td width="200">GUEST HPNUM : </td>
					<td width="400"><input type="text" name="hpnum" id="hpnum" value="<?php echo $HpNum ?>"></td>
				</tr>
			</table>
			<input type="submit" name="update" id="submit" value="UPDATE NOW"/>
		</form>
		<a href="category.php">CATEGORY LIST</a><br>
	</body>
</center><br>
<?php require 'footer.php'; ?> 
</html>