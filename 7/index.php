<?php

	session_start();
	
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Strona</title>
	</head>
	<body>
		<form name="formularz" action="index.php" method="POST">
		<label> Imie </label> <br>
		<input type="text" name="name[0]" required /><br><br>
		<label> Nazwisko </label> <br>
		<input type="text" name="sname[0]" required /><br><br>
		<label> Wiek </label> <br>
		<input type="date" name="age[0]" required ><br><br>
		<label> Numer karty </label> <br>
		<input type="text" name="cardnb" placeholder="0000-0000-0000-0000" required /><br><br>
		<label> Alergie </label><br>
		<input type="text" name="alle[0]"><br><br>
		<label> Zwierze towarzyszace </label><br>
		<div>
  <input type="radio" id="tak" name="pet" value="tak">
  <label for="tak">Tak</label>
</div>

<div>
  <input type="radio" id="Nie" name="pet" value="Nie">
  <label for="Nie">Nie</label>
</div><br><br>
		<label> Osoby towarzyszace </label> <br>
		<select name="osoby" id="osoby" required>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select><br><br>
  <input type="submit" name="wyslij" /><br><br>
</form> 
	</body>
</html>
<?php 
	if(isset($_POST['wyslij'])){
		if(isset($_POST['osoby'])){
			$_SESSION['osoby'] = $_POST['osoby'];
			$_SESSION['imiona'] = array($_POST['osoby']);
			$_SESSION['nazwiska'] = array($_POST['osoby']);
			$_SESSION['wiek'] = array($_POST['osoby']);
			$_SESSION['alergie'] = array($_POST['osoby']);
			$_SESSION['twzwierzeta'] = $_POST['pet'];
			$_SESSION['nrkarty'] = $_POST['cardnb'];
			
			$_SESSION['imiona'][0] = $_POST['name'][0];
			$_SESSION['nazwiska'][0] = $_POST['sname'][0];
			$_SESSION['wiek'][0] = $_POST['age'][0];
			$_SESSION['alergie'][0] = $_POST['alle'][0];
		}
	}	
?>
<a href="index2.php" ><input type ="button" name="button" value="Dalej"/> </a>