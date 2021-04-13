<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Strona</title>
	</head>
	<body>
		<form name="kalkulator" action="index.php" method="POST">
  <label for="pliczba">Pierwsza liczba:</label><br>
  <input type="number" name="pliczba" value="0"><br>
  <label for="dliczba">Druga liczba:</label><br>
  <input type="number" name="dliczba" value="0"><br>
  <label for="wybierz">Wybierz dzialanie</label><br>
  <select name="wybierz">
  <option value="+"> + </option>
  <option value="-"> - </option>
  <option value="*"> * </option>
  <option value="/"> / </option>
  </select><br><br>
  <input type="submit" value="wyslij"><br><br>
</form> 
	</body>
</html>
<?php
require_once 'dodawanie.php';
require_once 'odejmowanie.php';
require_once 'mnozenie.php';
require_once 'dzielenie.php';

$pliczba = $_POST['pliczba'];
$dliczba = $_POST['dliczba'];
$wybierz = $_POST['wybierz'];
	switch ($wybierz){
	case "+":
		dodawanie($pliczba,$dliczba);
		break;
	case "-":
		odejmowanie($pliczba,$dliczba);
		break;
	case "*":
		mnozenie($pliczba,$dliczba);
		break;
	case "/":
		dzielenie($pliczba,$dliczba);
		break;
	}
	
	
?>