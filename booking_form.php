<?php
//CONNECT TO DATABASE
require 'config.php';

//RECALL HEADER FILE
require 'header.php';

//GET THE ID STAFF
session_start();

$saleMan = $_SESSION['idstaff'];

//RECEIVED IC NUMBER FROM URL
$guest2 = $_GET['idguest'];

//GET CURRENT RECORD ON SELECTED ID
$result = mysqli_query($samb,"SELECT * FROM guest WHERE icguest = '$guest2'");
while ($res = mysqli_fetch_array($result)) {
	$Name = $res['name'];
	$Ic= $res['icguest'];
	$Hp = $res['hpnum'];
}
?>

<html>
<body>
	<form method="POST" action="booking_enter.php">
		<table width="800" border="1" align="center">
			<tr>
				<td colspan="2" align="center">GUEST INFORMATION</td>
			</tr>
			<tr>
				<td width="200">GUEST IC NUMBER :</td>
				<td width="400">
					<input size='60' readonly type="text" name="icnum" value="<?php echo $Ic; ?>"></td>
			</tr>
			<tr>
				<td>GUEST NAME</td>
				<td><input size="60" readonly type="text" name="name" value="<?php echo $Name; ?>"></td>
			</tr>
			<tr>
				<td>GUEST HP NUMBER</td>
				<td><input size="60" readonly type="text" name="hpnum" value="<?php echo $Hp; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">BOOKING SECTION</td>
			</tr>
			<tr>
				<td>ROOM :</td>
				<td><select name="roomid" id="roomid">
					<?php 
					$dataRoom = mysqli_query($samb,"SELECT * FROM room");
					while ($infoRoom=mysqli_fetch_array($dataRoom)) {
						echo "<option hidden selected > --CHOOSE ROOM-- </option>?";
						echo "<option value='$infoRoom[idroom]'>$infoRoom[nomroom]</option>?";
					}
					?>
				</select></td>
			</tr>
			<tr>
				<td>Check In Date</td>
				<td><input required type="date" name="checkin"></td>
			</tr>
			<tr>
				<td>Check Out Date</td>
				<td><input type="date" name="checkout"></td>
				<input required hidden type="text" name="staff" value="<?php echo $saleMan; ?>">
			</tr>
			<tr>
				<td colspan="2" align="center">
					<button type="submit" id="booking" name="booking">BOOKING NOW</button>
					<button type="reset" \>RESET</button>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<a href="index2.php">MAIN MENU</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>