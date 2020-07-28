<?php
//CONNECT TO DATABASE
require 'config.php';

//GET ID FROM URL
$IdCat = $_GET['idcat'];

//EXE SQL COMMAND TO DELETE RECORD
$result = mysqli_query($samb,"DELETE FROM categories WHERE idcat='$IdCat'");

//DISPLAY MSG
echo "<script>alert('RECORD WAS DELETE SUCCESS');window.location='category.php'</script>";
?>