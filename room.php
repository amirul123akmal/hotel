<?php
//CONNECT TO DATABSE
require('config.php');
//RECALL HEADER FILE
require('header.php');
?>
<html>
<style type="text/css">
	b{color:<?php echo $keempat; ?>}
</style>
<center>
	<h2 style="color: <?php echo $keenam; ?>"> LIST OF ROOM</h2><br>
	<table width="811" border="1" align="center">
		<tr align="center">
			<td width="40"><b>NUM.</b></td>
			<td width="150"><b>ROOM NUMBER</b></td>
			<td width="200"><b>TYPE ROOM</b></td>
			<td width="150"><b>PRICE ROOM</b></td>
			<td width="150"><b>UPDATION</b></td>
			<td width="150"><b>DELETION</b></td>
		</tr>
		<?php
		$data1 = mysqli_query($samb,"SELECT * FROM room ORDER BY nomroom ASC");
		$no=1;
		while ($info1 = mysqli_fetch_array($data1)) {
			$dataCat = mysqli_query($samb,"SELECT * FROM categories WHERE idcat='$info1[idcat]'");
			$infoCat = mysqli_fetch_array($dataCat);
			$data_wait = mysqli_query($samb,"SELECT * FROM room WHERE ");
		?>
		<tr>
			<td> <?php echo $no; ?></td>
			<td> <?php echo $info1['nomroom']; ?></td>
			<td> <?php echo $infoCat['category']; ?></td>
			<td> RM <?php echo $infoCat['price']; ?></td>
			<td><a href="room_update.php?nomroom=<?php echo $info1['nomroom']; ?>"><div class="link">UPDATE</div></a></td>
			<td><a href="room_delete.php?roomid=<?php echo $info1['idroom']; ?>"><div class="link">DELETE</div></a></td>
		</tr>
		<?php $no++; } ?>
	</table><br>
	<a href="room_add.php"> [+] ROOM ADD</a><br><br>
	<a href="index2.php">MAIN MENU</a>
</center>
</html>