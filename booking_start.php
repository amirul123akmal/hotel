<?php
//CONNECT TO DATABASE
require 'config.php';

//CONNECT TO HEADER
require 'header.php';

//RECEIVED IC NUMBER SEARCH
$guest2 = $_POST['icguest'];
?>

<html>
<center>
	<h2>GUEST INFORMATION</h2>
	<table width="800" border="1" align="center">
		<tr>
			<td width="20"><b>Num.</b></td>
			<td width="200"><b>Name</b></td>
			<td width="50"><b>HP Number</b></td>
			<td width="100"><b>Action</b></td>
		</tr>

		<?php
		//QUERY TO SEARCH IC
		$found = "SELECT * FROM guest WHERE icguest like '%$guest2%'";

		//EXE QUERY %found
		$result = mysqli_query($samb,$found);
		$no = 1; //INITIAL VALUE STARTING
		while ($data = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td> <?php echo $no; ?></td>
				<td> <?php echo $data['name']; ?></td>
				<td> <?php echo $data['hpnum']; ?></td>
				<td><a href="booking_form.php?idguest=<?php echo $data['icguest'];?>">BOOKING</a></td>
			</tr>
			<?php
			$no++; //INCREMENT
		}
		?>
	</table><br>
	<a href="booking.php">BACK</a><br><br>
	<a href="index2.php">Ke Menu Utama</a><br>
</center>
<?php require 'footer.php'; ?>
</html>