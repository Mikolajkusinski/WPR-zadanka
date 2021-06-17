<?php
	session_start();
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Quiz na wesoło rejestracja</title>
		
		<style type="text/css">
		html { 
		background: url(tlo.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#boxRej
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
		#miejsceNaHaslo2
		{
			text-align: center;
			font-family: "Comic Sans MS", cursive, sans-serif;
			padding: 15px;
		}
		#miejsceNaPrzycisk
		{
			text-align: center;
			font-family: "Comic Sans MS", cursive, sans-serif;
			padding: 15px;
		}
			.powrot {
			
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
		.powrot:hover {
			background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
			background-color:#bc80ea;
		}
		.powrot:active {
			position:relative;
			top:1px;
		}
		#pow{
			
		}
			.zarejestruj {
			
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
		.zarejestruj:hover {
			background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
			background-color:#bc80ea;
		}
		.zarejestruj:active {
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
	<div id="boxRej">
	<form action="rejestracja.php" method="post">
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
	<div id="miejsceNaHaslo2">
	<label for="haslo">Powtórz hasło</label><br>
	<input type="password" name="haslo2" required >	
	</div>
	<div id="miejsceNaPrzycisk">
	<input type="submit" name="zarejestruj" class="zarejestruj" value="Zarejestruj">
	<?php
	
	if(isset($_POST['zarejestruj'])){
		
	$_SESSION['nick']=$_POST['nick'];
	$nick = $_SESSION['nick'];
	$haslo = $_POST['haslo'];
	$haslo2 = $_POST['haslo2'];
	$hashHaslo = password_hash($haslo,PASSWORD_DEFAULT);
	
	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'projekt');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		
		if(istnieje($db,$nick) !== false){
			echo"<div id ='popup'>Istneje już użytkownik o takim nicku!</div>";
		}else{
			if($haslo !== $haslo2){
				echo"<div id ='popup'>Hasło musi być takie same!</div>";
			}else{
				rejestruj($db,$nick,$hashHaslo);
			}
		}
	}
	
	function istnieje($db,$nick){
		$sql="SELECT * FROM uzytkownicy WHERE nick = ?";
		$stmt = mysqli_stmt_init($db);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo"</br>ERROR";
		}
		
		mysqli_stmt_bind_param($stmt,"s",$nick);
		mysqli_stmt_execute($stmt);
		
		$resData = mysqli_stmt_get_result($stmt);
		
		if($row = mysqli_fetch_assoc($resData)){
			return $row;
		}else{
			$result = false;
			return $result;
		}
		
		mysqli_stmt_close($stmt);
	}
	function rejestruj($db,$nick,$hashHaslo){
		$sql="INSERT INTO uzytkownicy (nick,haslo) VALUES (?,?);";
		$stmt = mysqli_stmt_init($db);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo"</br>ERROR";
			exit();
		}
		
		mysqli_stmt_bind_param($stmt,"ss",$nick,$hashHaslo);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: index.php");
		exit();
	}
	
	?>
	</div>
	</form>
	<div id"pow">
	<a href="index.php" class="powrot">Powrót</a>
	</div>
	</body>
</html>