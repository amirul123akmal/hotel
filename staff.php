<?php
//CONNECT TO DATABASE
require('config.php');

//RECALL HEADER FILE
require('header.php');
?>
<html>
<style type="text/css">
	b{color:<?php echo $keempat; ?>}
</style>
<center>
	<h2 style="color: <?php echo $keenam; ?>">Staff List</h2>
	<table width="800" border="1" align="center">
		<tr align="middle">
			<td height="30"><b>NO.</b></td>
			<td><b>USERNAME</b></td>
			<td><b>ID STAFF</b></td>
			<td><b>PASSWORD</b></td>
			<td><b>UPDATION</b></td>
			<td><b>DELETION</b></td>
		</tr>
		<?php
		$data1 = mysqli_query($samb,"SELECT * FROM staff");
		$no = 1;
		while ($info1 = mysqli_fetch_array($data1)) {
			?>
			<tr>
				<td> <?php echo $no; ?> </td>
				<td> <?php echo $info1['name']; ?> </td>
				<td> <?php echo $info1['idstaff']; ?> </td>
				<td> <?php echo $info1['pass']; ?> </td>
				<td><a href="staff_update.php?staffid=<?php echo $info1['idstaff']; ?>"><div class="link">UPDATE</div></a></td>
				<td>
				<?php
				//HIDDEN DELETE LINK FOR ADMIN
				if ($info1['levels']!="ADMIN") {
					?>
					<a href="staff_delete.php?staffid=<?php echo $info1['idstaff']; ?>"><div class="link">DELETE</div></a>
					<?php
				}
				?>
				</td>
			</tr>
			<?php $no++; } ?>
	</table>
	<a href="staff_add.php">[+] Register New Staff</a><br><br>
	<a href="index2.php">Main Menu</a>
</center>
<body>

</body>
</html>