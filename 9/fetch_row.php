<html>
<body>
<head>
<title>Baza danych</title>
</head>
<?php
if (!$db_lnk = mysqli_connect("localhost","username","password")) {
  echo 'Błąd podczas próby połączenia z serwerem MySQL...<br/>';
  echo '</body></html>';
  exit;
}
if(!mysqli_select_db($db_lnk,'uczestnicy')){
	mysqli_close($db_lnk);
	echo 'Błąd podczas wyboru bazy danych <br/>';
	echo'</body></html>';
	exit;
}
$query = 'SELECT * FROM uczestnicy';
if(!$result = mysqli_query($db_lnk,$query)){
	mysql_close($db_lnk);
	echo 'Wystąpił błąd: nieprawidłowe zapytanie...<br/>';
	echo'</body></html>';
	exit;
}
?>
<table>
<tr>
<td>Imie</td>
<td>Nazwisko</td>
<td>Wiek</td>
</tr>
<?php
while($row = mysqli_fetch_row($result)){
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<tr>";
}
?>
</table>
<?php
if(!mysqli_close($db_lnk)){
	echo 'Błąd podczas zamykania połączenia z serwerem MySQL...<br/>';
}
?>
</body>
</html>