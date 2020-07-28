<?php
//CONNECT TO DATABASE
require 'config.php';
require 'header.php';

//POST VALUE
if (isset($_POST['icnum'])) {
	$ic = $_POST['icnum'];
	$In = $_POST['checkin'];
	$Out = $_POST['checkout'];
	$room = $_POST['roomid'];
	$idstaff = $_POST['staff'];
}

//DIFF DAY (DIFFERENT DA$Y)
$date1 = date_create($In);
$date2 = date_create($Out);
$diff = date_diff($date1,$date2);
$totalday = $diff->format("%a");

//LINK TO OTHER TABLE
$RooM = mysqli_query($samb,"SELECT * FROM room WHERE idroom='$room'");
$getRoom = mysqli_fetch_array($RooM);
$pay = mysqli_query($samb,"SELECT * FROM categories WHERE idcat='$getRoom[idcat]'");
$getCat = mysqli_fetch_array($pay);
$bayar = $getCat['price'];
$mustPay = $totalday*$bayar;

//CHECK AVAILABLE ROOM
$wujud = mysqli_query($samb,"SELECT * FROM booking WHERE idroom='$room' AND (check_in <= '$In' AND check_out > '$In') OR (check_in < '$Out' AND check_out > '$Out') OR (check_in >= '$In' AND check_out < '$Out')");
$bil_rekod = mysqli_num_rows($wujud);
if ($bil_rekod == 0&&$In !=$Out) {
	//ENTER BOOKING INTO TABLE
	$rekod = "INSERT INTO booking(idbook,check_in,check_out,idroom,icguest,payment,idstaff) values (NULL,'$In','$Out','$room','$ic','$mustPay','$idstaff')";

	 //EXECUTE SQL STATEMENT
	$hasil = mysqli_query($samb,$rekod);
	$last_id = mysqli_insert_id($samb);

	//DISPLAY MSG WHEN SUCCESSFULLY
	echo "<script>alert('ROOM BOOKING SUCCESSFULLY');window.location='booking_receipt.php?id=$last_id'</script>";
}
else{
	echo "<script>alert('ROOM BOOKING FAILED! ROOM NOT AVAILABLE');window.location='booking.php'</script>";
}
?>