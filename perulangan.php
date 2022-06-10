<?php

$ukuranbadan = $_GET['baju'];

switch ($ukuranbadan) {
	case $ukuranbadan>=90 && $ukuranbadan <=100:
		$ukuran="XL";
		break;
	case $ukuranbadan>=80 && $ukuranbadan <=89:
		$ukuran="L";
		break;
	case $ukuranbadan>=70 && $ukuranbadan <=79:
		$ukuran="M";
		break;
	case $ukuranbadan>=60 && $ukuranbadan <=69:
		$ukuran="S";
		break;
	
	default:
		$ukuran="XS";
		break;
}
echo"Ukuran Baju kamu = $ukuran";








?>