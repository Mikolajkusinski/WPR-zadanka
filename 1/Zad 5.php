<?php
$figura = "trapez";
switch($figura){
	case 'trojkat':
	echo "Podaj podstawe i wysokosc","<br>";
	$a = 7;
	$h = 10;
	$wynik = ($a*$h)/2;
	echo $wynik;
	break;
	case 'prostokat':
	echo "Podaj boki prostokata","<br>";
	$a = 5;
	$b = 12;
	$wynik = $a * $b;
	echo $wynik;
	break;
	case 'trapez':
	echo "Podaj podstawy oraz wysokosc trapezu","<br>";
	$a = 23;
	$b = 16;
	$h = 11;
	$wynik =(($a+$b)*$h)/2;
	echo $wynik;
	break;
}
?>

	