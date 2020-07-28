<?php
require('config.php');
$icguest = $_GET['icguest'];

//EXECUTE SQL COMMAND DELETE
$result = mysqli_query($samb,"DELETE FROM guest WHERE icguest=$icguest ");
echo "<script>alert('RECORD DELETED'); window.location='guest.php'</script>";
?>