<?php
if ($_SESSION['levels'] == "ADMIN"){
	?>
	MAIN MENU [ADMIN]
	<br>
	<br>
	<li><a href="category.php">Room Category</a></li>
	<li><a href="room.php">Room Setup</a></li>
	<li><a href="staff.php">Staff</a></li>
	<li><a href="import_staff.php">Staff Import</a></li>
	<li><a href="booking.php">Room Booking</a></li>
	<li><a href="booking_list.php">Booking List</a></li>
	<li><a href="guest.php">Guest</a></li>
	<li><a href="report.php">Report</a></li>
	<li><a href="signout.php">Sign Out</a></li>
	<?php
}
else{
	?>
	MAIN MENU[staff]
	<br>
	<li> <a href="booking.php">Room Booking</a></li>
	<li><a href="booking_list.php">Booking List</a></li>
	<li><a href="signout.php">Sign Out</a></li>
	<?php	
}
?>