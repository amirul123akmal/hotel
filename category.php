<?php
//CONNECT TO THE DATABASE
require 'config.php';

//HEADER FILE
require 'header.php';

?>

<html>
<center>
	<h2>CATEGORIES & PRICE</h2>
	<table width="700" border="1" align="center">
		<tr align="center">
			<td width="20"><b>NUM.</b></td>
			<td width="200"><b>CATEGORY</b></td>
			<td width="70"><b>PRICE</b></td>
			<td width="150"><b>UPDATION</b></td>
			<td width="150"><b>DELETION</b></td>
		</tr>
		<?php
		$data1 = mysqli_query($samb, "SELECT * FROM categories ORDER BY price ASC");
		$no = 1;
		while ($info1 = mysqli_fetch_array($data1)) {
			?>
			<tr>
				<td> <?php echo $no ;?></td>
				<td> <?php echo $info1['category'] ;?></td>
				<td> RM <?php echo $info1['price'] ;?></td>
				<td align="center" ><a href="category_update.php?idcat= <?php echo $info1['idcat'];?>">UPDATE</a></td>
				<td align="center" ><a href="category_delete.php?idcat=<?php echo $info1['idcat']; ?>">DELETE</a></td>
			</tr>
			<?php $no++; }?>
	</table><br><br>
	<p><a href="category_add.php">[+] ADD NEW CATEGORY</a></p><br><br>
	<P><a href="index2.php">MAIN MENU</a></P>
</center><br><br>
<?php require('footer.php'); ?>
</html>