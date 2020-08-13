<?php
//CONNECT TO DAATBASE
include 'config.php';

//GET THE ID FROM URL
$Nreceipt=$_GET['id'];

//GET THE RELATED RECORD
$Booking = mysqli_query($samb,"SELECT * FROM booking WHERE idbook='$Nreceipt'");
$getBooking=mysqli_fetch_array($Booking);
$Room = mysqli_query($samb,"SELECT * FROM room WHERE idroom = 'getBooking[idroom]'");
$getRoom = mysqli_fetch_array($Room);
$Cat = mysqli_query($samb,"SELECT * FROM  categories WHERE idcat='$getRoom[idcat]'");
$getCat = mysqli_fetch_array($Cat);
$Guest = mysqli_query($samb,"SELECT * FROM  guest WHERE icguest='$getBooking[icguest]'");
$getGuest = mysqli_fetch_array($Guest);
$Address = mysqli_query($samb,"SELECT * FROM  address WHERE icguest='$getGuest[icguest]'");
$getAdd = mysqli_fetch_array($Address);

//REARRANGE DATE FORMAT
$In = date("d-m-y", strtotime($getBooking['check_in']));
$Out = date('d-m-y',strtotime($getBooking['check_out']));
?>

<html>
	<title>OFFICIAL RECEIPT <?php echo $hotelname; ?></title>	
	<table width="800" border="0">
		<tr>
			<td width="700"><table width="700" border="0">
				<tr>
					<td width="360" valign="top">
						<span class="style1">
							<center>
								<u>
									<h2>OFFICIAL RECEIPT</h2>
								</u>
							</center><br/>
							<?php echo $hotelname;?><br/>
							<?php echo $address;?><br/>
						</span><br/>
					</td>
					<td width="23">&nbsp;</td>
					<td width="308" valign="top"><div align="right">
						<br/>
						Receipt Date: <?php echo date("d-m-y"); ?> <br>
						Receipt Num: <?php echo $getBooking['idbook']; ?>
					</div></td>
				</tr>
				<tr>
					<td colspan="3" valign="top"><hr/></td>
				</tr>
			</table></td>
		</tr>
		<tr>
			<td><p><strong>DETAIL GUEST & BOOKING ROOM</strong></p><table width="700" border="1" align="center"></td>
		</tr>
		<tr>
			<td width="300">FROM BOOKING<br>
				Room Number:<br>Category:</td>
				<td width="400"><?php echo $getRoom['nomroom'];?><br>
					<?php echo $getCat['category'];?>
					(RM<?php echo $getCat['price'];?>1</td>
		</tr>
		<tr>
			<td width="300">DATE CHECK IN / OUT <br>
				Check In : <br> Check Out : </td>
			<td width="400"><?php echo $In; ?><br><?php echo $Out; ?>
		</tr>
		<tr>
			<td width="300">GUEST NAME</td>
			<td width="400"><?php echo $getAdd['address1'];?><br>
			<?php echo $getAdd['address2'];?><br>
			<?php echo $getAdd['postcode'];?><br>
			<?php echo $getAdd['town'];?><br>
			<?php echo $getAdd['states']?><br>
			</td>
		</tr>
		<tr>
			<td width="300">TOTAL PAYMENT</td>
			<td width="400">RM <?php echo $getBooking['payment'];?><br></td>
		</tr>
<hr /><div align="center" class="style15"></div>
<center><br>
<small>THIS IS A COMPUTER PRINT, NOT REQUIRED SIGNTAURE.</small><br><br>
<a href="javascript:window.print()">Print Report</a>
<a href="index2.php">MAIN MENU</a>
</center>
	</table>
</html>