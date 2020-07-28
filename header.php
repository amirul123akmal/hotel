<?php 
	include "config.php";
	require 'color2.php';
	require 'zoom2.php';
?>
<html>
<head>
	<title> <?php echo $sysname;?> </title>
</head>
<style type="text/css">
	a{color: green;}
	a:hover{color: red;}
	.link{color: blue;}
	.link:hover{color: red;}
</style>
<body >
		<table border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td width="445" height="200" background="<?php echo $logo; ?>"></td>
				<!-- nama fail header adalah header.jpg -->
				<td width="0" height="0"  valign="center" style="background-repeat: no-repeat;">
					<!-- tukar nama sistem yang sesuai -->
					<font size="<?php echo $plus.$size1 ?>" color="<?php echo $pertama; ?>" font face="Arial">
					<?php echo $sysname; ?></font><br>
					<font size="<?php echo $plus.$size2 ?>" color="<?php echo $kedua; ?>" font face="Arial">
					<?php echo $hotelname; ?></font><br>
					<font size="<?php echo $plus.$size3 ?>" color="<?php echo $ketiga; ?>" font face="Arial">
					<?php echo $moto; ?></font>
				</td>
			</tr>
		</table>
</body>
<center>	
	<form method="POST" >
		<input type="submit" value = "+ Text" name="plus">
		<input type="submit" value ="- Text" name="minus"><br>
		<input type="submit" name="change" id="change" value="Change Color">
		<input type="submit" name="reset" id="reset" value="Reset Color">
	</form>
</center>
</html>