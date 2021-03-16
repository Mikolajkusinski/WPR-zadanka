<?php
$pesel = "01082102246";
$rok = substr($pesel,0,2);
$mies = substr($pesel,2,2);
$dzien = substr($pesel,4,2);
if($rok>21){
	echo $dzien,"-",$mies,"-19",$rok;
}else{
	echo $dzien,"-",$mies,"-20",$rok;
}
?>
