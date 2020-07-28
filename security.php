<?php

if (!(isset($_SESSION['idstaff']))) {
	session_destroy();
	header("location:index.php");
}
?>