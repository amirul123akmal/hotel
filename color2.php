<?php

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}
	$pertama='red';
	$kedua='green';
	$ketiga = 'green';
	$keenam = 'black';
	$keempat = 'black';

	if (isset($_POST['change'])) {
		# code...
		$pertama = random_color();
		$kedua = random_color();
		$ketiga = random_color();
		$keenam = random_color();
		$keempat = random_color();
	} 
	if (isset($_POST['reset'])) {
		# code...
		$pertama='red';
		$kedua='green';
		$ketiga = 'green';
		$keenam = 'black';
		$keempat = 'black';
	}
?>