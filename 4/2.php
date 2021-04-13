<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Strona</title>
	</head>
	<body>
		<form name="kalkulator" action="index.php" method="POST">
			<center><label for="tekst">Miejsce na tekst do zapisu</label><br>
			<textarea cols="50" rows="10" name="tekst" placeholder="Tu wpisać tekst"></textarea><br>
			<input type="submit" value="zapisz"><br><br>
</form> 
	</body>
</html>
<?php
$textField = $_POST['tekst'];
$date = date("Y-m-d");
$file = fopen('zapis.txt', 'a');
$end = '<br><br>';
fwrite($file, $date. PHP_EOL);
fwrite($file, $textField. PHP_EOL. PHP_EOL);  
fclose($file);  
if(isset($_POST['zapisz'])){
	echo "Tekst zapisano";
}


?> 