<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL HEADER FILE
require('header.php');
?>
<html>
<center>
	<h2> Guest List</h2>
	<table width="800" border="1" align="center">
		<tr align="middle">
			<td height="30">NO.</td>
			<td>GUEST IC</td>
			<td>GUEST NAME</td>
			<td>GUEST HP NUMBER</td>
			<td>UPDATION</td>
			<TD>DELETION</TD>
			<td>BOOKING</td>
		</tr>
		<?php
		$data1 = mysqli_query($samb,"SELECT * FROM guest");
		$no = 1;
		while ($info1 = mysqli_fetch_array($data1)) {
			?>
			<tr>
				<td> <?php echo $no; ?> </td>
				<td> <?php echo $info1['icguest']; ?> </td>
				<td> <?php echo $info1['name']; ?> </td>
				<td> <?php echo $info1['hpnum']; ?> </td>
				<td><a href="guest_update.php?icguest=<?php echo $info1['icguest']; ?>">UPDATE</a></td>
				<td>
					<a href="guest_delete.php?icguest= <?php echo $info1['icguest']; ?>">DELETE</a>
				</td>
				<td><a href="booking_form.php?idguest=<?php echo $info1['icguest'] ?>">BOOKING</a></td>
			</tr>
			<?php $no++; } ?>
	</table><br>
	<a href="guest_register.php">[+] Register New Guest</a><br><br>
	<a href="index2.php">Main Menu</a>
</center>
<body>
</body>
</html>