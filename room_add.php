<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL THE HEADER
require('header.php');

//	RECEIVE POST VALUE
if (isset($_POST['nomroom'])) {
	$nomroom = $_POST['nomroom'];
	$idcat = $_POST['idcat'];
	//ADD VALUE TO TABLE
	$result = mysqli_query($samb , "INSERT INTO room (nomroom , idcat) VALUES ('$nomroom', '$idcat')");
echo "<script>alert('RECORD ADDED'); window.location='room.php'</script>";
}
?>

<html>
<center>
	<body>
		<h2>ADD NEW ROOM</h2>
		<form name="form1" action="room_add.php" method="POST">
			<table width="900" border="0" align="center">
				<tr>
					<td width="100">ROOM NUMBER</td>
					<td width="300"><input type="text" size='20' name="nomroom" id="nomroom" require /></td>
				</tr>
				<tr>
					<td width="100">TYPE ROOM</td>
					<td width="300">
						<select name="idcat">
							<?php
							$dataCat = mysqli_query($samb, "SELECT * FROM categories");
							while ($infoCat = mysqli_fetch_array($dataCat)) {
								echo "<option hidden selected> -- Choose Type room -- </option>";
								echo "<option value='$infoCat[idcat]'>$infoCat[category]</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="add" id="add" value="ADD ROOM" />
					</td>
				</tr>
			</table>
		</form>
		<a href="room.php">LIST OF ROOM</a><br>
	</body>
</center>
</html>