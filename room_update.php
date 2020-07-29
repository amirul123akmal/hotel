<?php
//CONNECT TO DATABASE
require 'config.php';
//RECALL HEADER FILE
require 'header.php';
session_start();
//RECEIVED POST VALUE
if (isset($_POST['renewid'])) {
	$roomid = $_SESSION['roomid'];
	$idtype = $_POST['renewid'];
	echo "<script>alert('<?php echo $idtype; ?>');</script>";
	//SAVE WITH THE NEW VALUE
	$result = mysqli_query($samb,"UPDATE room SET idcat='idtype' WHERE idroom='$roomid' ");
	echo "<script>alert('RECORD UPDATED'); window.location='room.php'</script>";
}
$IdRoom=$_GET['nomroom'];
$result = mysqli_query($samb,"SELECT * FROM room WHERE nomroom='$IdRoom'");
while ($res = mysqli_fetch_array($result)) {
	$room = $res['nomroom'];
	$cat = $res['idcat'];
	$roomid = $res['idroom'];
}
$dataCat = mysqli_query($samb,"SELECT * FROM categories WHERE idcat = '$cat'");
$infoCat = mysqli_fetch_array($dataCat);
$_SESSION['original'] = $room;
$_SESSION['roomid'] = $roomid;
?>
<html>
<center>
	<body>
		<h2 style="color: <?php echo $keenam; ?>">UPDATE ROOM & CATEGORY</h2>
		<form name="form1" action="room_update.php" method="POST">
			<table width="600" border="0" align="center">
				<tr>
					<td width="200">ROOM NUMBER :</td>
					<td>
						<p><?php echo $_SESSION['original']; ?></p>
					</td>
				</tr>
				<tr>
					<td width="200">ROOM CATEGORY :</td>
					<td><b>
						<select name="renewid" id="renewid" >
							<option value="<?php $res[idcat];?>"><?php echo $infoCat['category']; ?></option>
							<?php $data2 = mysqli_query($samb,"SELECT * FROM categories;");
							while($info2 = mysqli_fetch_array($data2)){
								echo "<option value='$info2[idcat]'><?php echo $info2[category];?></option>";
								 }
								?>
						</select>
					</b></td>
				</tr>
			</table>

			<button type="submit" name="update" id="submit" >Kemaskini</button>
		</form>
		<a href="room.php">ROOM LIST</a><br>
	</body>
</center>
</html>