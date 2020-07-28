<?php
require 'config.php';
//GET IF FROM URL
$IdRoom = $_GET['roomid'];
//EXECUTE SQL COMMAND DELETE
$result = mysqli_query($samb,"DELETE FROM room WHERE idroom='$IdRoom'");
//DISPLAY MSG
echo "<script>alert('RECORD DELETED');window.location='room.php'</script>";
?>