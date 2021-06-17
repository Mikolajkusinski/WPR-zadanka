<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Quiz na wesoło logowanie</title>
		
		<style type="text/css">
		html { 
		background: url(tlo.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#boxLogowania
		{
			width: 600px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 250px;
			high: 800px;
		}
		#logo
		{
			text-align: center;
			padding: 15px;
			color: #131313;
			letter-spacing: .15em;
			text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
			font-size: 25px;
		}
		#miejsceNaNick
		{
			text-align: center;
			font-family: "Comic Sans MS", cursive, sans-serif;
			padding: 15px;
		}
		#miejsceNaHaslo
		{
			text-align: center;
			font-family: "Comic Sans MS", cursive, sans-serif;
			padding: 15px;
		}
		#miejsceNaPrzycisk
		{
			text-align: center;

			padding: 15px;
		}
		#tabela
		{
			margin-top: 250px;
			high: 200px;
			float: left;
			margin-left: 50px;
		}
		#rejestracja{
			margin-top: 250px;
			high: 200px;
			float: right;
			margin-right: 50px;
		}
		.wyniki {
			box-shadow:inset 0px 1px 0px 0px #efdcfb;
			background:linear-gradient(to bottom, #dfbdfa 5%, #bc80ea 100%);
			background-color:#dfbdfa;
			border-radius:6px;
			border:1px solid #c584f3;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #9752cc;
		}
		.wyniki:hover {
			background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
			background-color:#bc80ea;
		}
		.wyniki:active {
			position:relative;
			top:1px;
		}
		.zaloguj {
			box-shadow:inset 0px 1px 0px 0px #efdcfb;
			background:linear-gradient(to bottom, #dfbdfa 5%, #bc80ea 100%);
			background-color:#dfbdfa;
			border-radius:6px;
			border:1px solid #c584f3;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #9752cc;
		}
		.zaloguj:hover {
			background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
			background-color:#bc80ea;
		}
		.zaloguj:active {
			position:relative;
			top:1px;
		}
		.rej {
			box-shadow:inset 0px 1px 0px 0px #efdcfb;
			background:linear-gradient(to bottom, #dfbdfa 5%, #bc80ea 100%);
			background-color:#dfbdfa;
			border-radius:6px;
			border:1px solid #c584f3;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #9752cc;
		}
		.rej:hover {
			background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
			background-color:#bc80ea;
		}
		.rej:active {
			position:relative;
			top:1px;
		}
		#popup{
			text-align: center;
			margin-top: 15px;
			font-family: "Comic Sans MS", cursive, sans-serif;
			
		}
		
		</style>
	</head>
	<body>
	<div id="boxLogowania">
	<form action="index.php" method="post">
	<div id="logo">
	<h1>Quiz na wesoło</h1>
	</div>
	<div id="miejsceNaNick">
	<label for="nick">Nick</label><br>
	<input type="text" name="nick" required >
	</div>
	<div id="miejsceNaHaslo">
	<label for="haslo">Hasło</label><br>
	<input type="password" name="haslo" required >	
	</div>
	<div id="miejsceNaPrzycisk">
	<input type="submit" name="zaloguj" class="zaloguj" value="Zaloguj">
<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'projekt');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	if(isset($_POST['zaloguj'])) { 
		$mojnick = mysqli_real_escape_string($db,$_POST['nick']);
		
		$sql = "SELECT haslo FROM uzytkownicy WHERE nick = '$mojnick';";
		$res = mysqli_query($db,$sql);
		$row = mysqli_fetch_row($res);
		$hashHaslo = $row[0];
		
		
		if(password_verify($_POST['haslo'],$hashHaslo) == true){

			$mojehaslo = mysqli_real_escape_string($db,$hashHaslo); 
			
			$sql = "SELECT * FROM uzytkownicy WHERE nick = '$mojnick' and haslo = '$mojehaslo';";
			$result = mysqli_query($db,$sql);
			$row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$count = mysqli_num_rows($result);
			
			if($count == 1) {
			$_SESSION['nick'] = $mojnick;
				echo '<script type="text/javascript">';
				echo 'window.location.href="'."index2.php".'";';
				echo '</script>';
			}
		}else{
			echo"<div id='popup' >Twój login lub hasło są nieprawidłowe! Spróbuj ponownie. </div>";
		}
   }
?>
	</div>
	</form>
	</div>
	<div id="tabela">
	<a href="tabelaWynikow.php" class="wyniki">Tabela Wyników</a>
	</div>
	<div id="rejestracja">
	<a href="rejestracja.php" class="rej">Zarejestruj się</a>
	</div>
	</body>
</html>
