<?php
	session_start();

?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Quiz na wesoło tabela wyników</title>
	<style type="text/css">	
	#logo
		{
			text-align: center;
			padding: 15px;
			color: #131313;
			letter-spacing: .15em;
			text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
			font-size: 25px;
		}
	html { 
		background: url(tlo.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	#tabelabox{
		font-family: "Comic Sans MS", cursive, sans-serif;
		font-size: 25px;
		text-align: center;
		width: 800px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 150px;
		high: 600px;
	}
	.tab{
		undefined;
		table-layout: fixed;
		width: 800px;
	}
	.col1{
		text-align: left;
		width: 600px;
	}
	.col2{ 
		width: 200px;
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
		margin-top: 50px;
		float: right;
		margin-right: 10%;
		
	}
	</style>
	</head>
	<body>
	<div id="tabelabox">
	<div id="logo">
	<h1>Quiz na wesoło</h1>
	</div>
	<table class="tab">
<colgroup>
<col class="col1">
<col class="col2">
</colgroup>
<thead>
  <tr>
    <th>Nick</th>
    <th>Wynik</th>
  </tr>
</thead>
<tbody>
  
</tbody>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'projekt');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$db) {
  die("Problem z połączeniem z bazą danych: " . mysqli_connect_error());
}
	
$sql="SELECT nick,wynik FROM uzytkownicy ORDER BY wynik DESC;";
$res = $db-> query($sql);
	
if($res-> num_rows >0){
	while($row = $res-> fetch_assoc()){
		echo"<tr>
    <td style='text-align: left'>".$row["nick"]."</td>
    <td style='text-align: left'>".$row["wynik"]."</td>
    </tr>";
	}
	$db-> close();
}
?>
</table>
	</div>
	<div>
	</div>
	<div id="pow">
		<a href="index.php" class="powrot">Powrót</a>
	</div>
	</body>
</html>