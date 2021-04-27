<?php
	session_start();
for($i = 1;$i < $_SESSION['osoby']; $i++){
	echo"
	<form name='formularz' action='' method='POST'>
		<label> Imie </label> <br>
		<input type='text' name='name[${i}]' required /><br><br>
		<label> Nazwisko </label> <br>
		<input type='text' name='sname[${i}]' required /><br><br>
		<label> Wiek </label> <br>
		<input type='date' name='age[${i}]' required ><br><br>
		<label> Alergie </label><br>
		<input type='text' name='alle[${i}]'><br>";
echo"--------------------------------------------------------------<br><br>";
}
echo"
  <input type='submit' name='wyslij' /><br><br>";
if(isset($_POST['wyslij'])){
	for($i = 1; $i<$_SESSION['osoby'];$i++){
		$_SESSION['imiona'][$i] = $_POST['name'][$i];
		$_SESSION['nazwiska'][$i] = $_POST['sname'][$i];
		$_SESSION['wiek'][$i] = $_POST['age'][$i];
		$_SESSION['alergie'][$i] = $_POST['alle'][$i];
	}
}

?>
<a href="index.php" ><input type ="button" name="button" value="Cofnij"/> </a>
<a href="index3.php" ><input type ="button" name="button" value="Podsumowanie"/> </a>