<center>
<?php
session_start();
echo "Twoje dane: <br>";
echo "Imie: <br>".$_SESSION['imiona'][0]."<br>";
echo "Nazwisko: <br>".$_SESSION['nazwiska'][0]."<br>";
echo "Data urodzenia: <br>".$_SESSION['wiek'][0]."<br>";
echo "Alergie: <br>".$_SESSION['alergie'][0]."<br>";
echo "Czy zwierze towarzyszace: <br>".$_SESSION['twzwierzeta']."<br>";
echo "Numer karty debetowej/kredytowej: <br>".$_SESSION['nrkarty']."<br><br>";
echo"_______________________________________________<br><br>";
echo"Dane osob towarzyszacych<br>";


for($i = 1;$i<$_SESSION['osoby'];$i++){
	echo"_______________________________________________<br><br>";
	echo "Imie: <br>".$_SESSION['imiona'][$i]."<br>";
    echo "Nazwisko: <br>".$_SESSION['nazwiska'][$i]."<br>";
	echo "Data urodzenia: <br>".$_SESSION['wiek'][$i]."<br>";
	echo "Alergie: <br>".$_SESSION['alergie'][$i]."<br>";
}
?>
</center>
<a href="index.php" ><input type ="button" name="button" value="Cofnij"/> </a>