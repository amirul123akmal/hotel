<?php 
	include "config.php";
	require 'color2.php';
	require 'zoom2.php';
?>
<html>
<head>
	<title> <?php echo $sysname;?> </title>
</head>
<script type="text/javascript" src="font.js"></script>
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
		<button onclick="change_color()">Change Color</button>
		<button onclick="default_color()">Default Color</button>
	</form>
</center>
</html>