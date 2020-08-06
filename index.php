<?php
require'config.php';
require'header.php';
//START LOGIN SESSION
session_start();
//GET THE POST VALUES
if (isset($_POST['idstaff'])){
	//PASS POST VALUE TO VAIABLE
	$user = $_POST['idstaff'];
	$pass = $_POST['pass'];

	//EXE. THE SQL SATTEMENT
	$query = mysqli_query($samb, "SELECT * FROM staff WHERE idstaff='$user' AND pass='$pass' ");
	$row = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) == 0|| $row ['pass']!= $pass){
		//MSG IF FAIL TO LOGIN
		echo "<script>alert('Sales Person ID OR PASSWORD incorrect');
		window.location='index.php'</script>";
	}
	else{
		$_SESSION['idstaff']=$row['idstaff'];
		$_SESSION['levels'] =$row['levels'];

		//CREATE VARIABLE FOR LOGIN SESSION 
		$saleMan = $_SESSION['idstaff'];

		//OPEN THE MAIN MENU
		header("Location: index2.php");
	}
}
?>
<html>
<body>	
<center>
	<table width='70%' border=0>
		<tr style="color: <?php echo $keenam; ?>">
			<td width="400" id="menu"><U>STAFF LOGIN ONLY</U></td>
		</tr>
		<td>
			<form method="POST">
				<p id="menu1" >STAFF LOGIN</p>
				<label id="menu2" >ID STAFF</label><br>
				<input type="text" name="idstaff"placeholder="Id Staff" required ><br>
				<label id="menu3" >Password</label><br>
				<input type="password" name="pass" placeholder="Password" required><br><br>	
				<button type="submit">Login</button><br>
				<script>change_size();</script>
			</form>
		</td>
		<td width="400"><font size='6' face="Georgia, Arial" color="maroon">
			"Discover a hotel that defines a new dimension of luxury"
		</td>
	</table>
</center>
</body><br><br>
<?php require('footer.php'); ?>
</html>
