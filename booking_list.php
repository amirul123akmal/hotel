<?php
//CONNECT TO DATABASE
require 'config.php';

//RECALL HEADER
require 'header.php';

?>

<html>
<body>
	<center>
		<table width="800" border="0">
			<td><p><h2>BOOKING LIST</h2></p>
			<table width="1000" border="1" align="center">
				<tr>
					<td width="30"><b>Num.</b></td>
					<td width="100"><b>Staff</b></td>
					<td width="100"><b>Room Num</b></td>
					<td width="120"><b>Check In</b></td>
					<td width="120"><b>Check Out</b></td>
					<td width="100"><b>Days</b></td>
					<td width="200"><b>Guest Name</b></td>
					<td width="100"><b>HP Number</b></td>
					<td width="180"><b>Price</b></td>
					<td width="180"><b>Amount</b></td>
				</tr>
				<?php
					$no=1;
					//RECALL BOOKING TABLE
					$dataBooking=mysqli_query($samb, "SELECT * FROM booking ORDER BY check_in DESC");

					//INITIAL VALUE
					$totalAmount = 0;
					while ($Booking=mysqli_fetch_array($dataBooking)){

					//LINK TO TABLE ROOM VIA FOREIGN KEY
					$dataRoom = mysqli_query($samb, "SELECT * FROM room WHERE idroom='$Booking[idroom]'");
					$Room = mysqli_fetch_array($dataRoom);

					//LINK TO TABLE CATEGORIES VIA FOREIGN KEY
					$dataCat = mysqli_query($samb, "SELECT * FROM categories WHERE idcat='$Room[idcat]'");
					$Cat = mysqli_fetch_array($dataCat);

					//LINK TO TABLE GUEST VIA FOREIGN KEY
					$dataGuest = mysqli_query($samb, "SELECT * FROM guest WHERE icguest='$Booking[icguest]'");
					$Guest = mysqli_fetch_array($dataGuest);

					//DIFF DAY (DIFFERENT DAY)
					$date1 = date_create($Booking['check_in']);
					$date2 = date_create($Booking['check_out']);
					$diff = date_diff($date1,$date2);

					$totalday = $diff->format("%a");

					//FORMAT DATE
					$In = date("d-m-y", strtotime($Booking['check_in']));
					$Out = date("d-m-y", strtotime($Booking['check_out']));
				?>

				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $Booking['idstaff']; ?></td>
					<td><?php echo $Room['nomroom']; ?></td>
					<td><?php echo $In; ?></td>
					<td><?php echo $Out; ?></td>
					<td><?php echo $diff->format("%a days"); ?></td>
					<td><?php echo $Guest['name']; ?></td>
					<td><?php echo $Guest['hpnum']; ?></td>
					<td>RM <?php echo number_format($Cat['price'],2); ?></td>
					<td>RM <?php echo number_format($Cat['price']*$totalday,2); ?></td>
				</tr>

				<?php $no++; } ?>
				<tr>
					<td colspan="9" align="right"> Total Amount</td>
					<td>RM <?php echo number_format($totalAmount,2); ?></td>
				</tr>
				</table>
				<hr /><div align="center" class="style15">*REPORT END*<br/>Total Records : <?php echo $no-1 ;?></div>
				<center>
					<br><br>
					<a href="index2.php">Main Menu</a><br>
					<a href="javascript:window.print()">PRINT</a>
				</center>
			</td>
		</table>
	</center>
</body><br>
<?php require 'footer.php'; ?>
</html>
