<?php

//SAMBUNGAN MYSQLI DENGAN nama $samb
$samb = mysqli_connect("localhost","root","","hotel");

//SEMAK SAMBUNGAN JIKA GAGAL
if (mysqli_connect_errno()){
	echo "Gagal sambungkan pangkalan data MySQL: ".mysqli_connect_errno();
}

//SETUP NAMA HOMESTAY
$sysname="HOTEL MANAGEMENT SYSTEM";
$hotelname = "SILICON HOTEL";
$address = "Lot 88, Taman Infra, <br> 72000 Kuala Pilah, Perak.";
$moto = "Lexury Hotel Room";
$logo = "gambar/wwblogo.jpg";
?>