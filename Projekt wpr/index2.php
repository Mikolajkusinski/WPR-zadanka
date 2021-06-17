<?php
	session_start();

?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<title>Quiz na wesoło</title>
	<style type="text/css">
	html { 
		background: url(tlo.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	#boxGry
	{
		width: 1200px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 100px;
		high: 1300px;
	}
	#gra
	{
		font-family: "Comic Sans MS", cursive, sans-serif;
		text-align: center;
		font-size: 25px;
		width: 1200px;
	}
	.sub {
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
	.sub:hover {
		background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
		background-color:#bc80ea;
	}
	.sub:active {
		position:relative;
		top:1px;
	}	
	</style>
	</head>
	<body>
	<div id="boxGry"  >
	<div id="gra" >
		<form action="index2.php" method="post">
		
		    <ol>
            
                <li>
                
                    <h3>Ile 1 metr ma centymetrów</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania1" id="odpA1" value="A" />
                        <label for="odpA1">A) 10 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania1" id="odpB1" value="B" />
                        <label for="odpB1">B) 100</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania1" id="odpC1" value="C" />
                        <label for="odpC1">C) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania1" id="odpD1" value="D" />
                        <label for="odpD1">D) 10000</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>Jaki jest najbardziej znany na świecie twórca muzyki reggae?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania2" id="odpA2" value="A" />
                        <label for="odpA2">A) Robbie Williams </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania2" id="odpB2" value="B" />
                        <label for="odpB2">B) Kamil Bednarek</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania2" id="odpC2" value="C" />
                        <label for="odpC2">C) Bob Marley</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania2" id="odpD2" value="D" />
                        <label for="odpD2">D) Michael Jackson</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Czyja podobizna widnieje na banknocie 50zł?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania3" id="odpA3" value="A" />
                        <label for="odpA3">A) Kazimierz Wielki</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania3" id="odpB3" value="B" />
                        <label for="odpB3">B) Jarosław Kaczyński</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania3" id="odpC3" value="C" />
                        <label for="odpC3">C) chciałbym mieć pięć dych</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania3" id="odpD" value="D3" />
                        <label for="odpD3">D) Donald Tusk</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Gdy księżyc jest w pełni wygląda jak?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania4" id="odpA4" value="A" />
                        <label for="odpA4">A) księżyc </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania4" id="odpB4" value="B" />
                        <label for="odpB4">B) odkurzacz</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania4" id="odpC4" value="C" />
                        <label for="odpC4">C) słońce</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania4" id="odpD4" value="D" />
                        <label for="odpD4">D) kometa</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Skąd pochodzi kot brytyjski?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania5" id="odpA5" value="A" />
                        <label for="odpA5">A) z Anglii </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania5" id="odpB5" value="B" />
                        <label for="odpB5">B) z Egiptu</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania5" id="odpC5" value="C" />
                        <label for="odpC5">C) z Wielkiej Brytanii</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania5" id="odpD5" value="D" />
                        <label for="odpD5">D) z kosmosu</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Co to są stygmaty?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania6" id="odpA6" value="A" />
                        <label for="odpA6">A) przeciwieństwo dogmatu </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania6" id="odpB6" value="B" />
                        <label for="odpB6">B) nowe placki greckie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania6" id="odpC6" value="C" />
                        <label for="odpC6">C) duże kolczyki damskie</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania6" id="odpD6" value="D" />
                        <label for="odpD6">D) rany podobne do Chrystusowych</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Śmiertelna dawka alkoholu wynosi 4,5 promila.Kogo to nie dotyczy?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania7" id="odpA7" value="A" />
                        <label for="odpA7">A) Polaków </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania7" id="odpB7" value="B" />
                        <label for="odpB7">B) Polaków i Rosjan</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania7" id="odpC7" value="C" />
                        <label for="odpC7">C) amerykańskich naukowców</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania7" id="odpD7" value="D" />
                        <label for="odpD7">D) kosmonautów</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Jak nazywa się kuzyn Niko Bellica z gry GTA4, który ciągle chce jeździć grać w kręgle?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania8" id="odpA8" value="A" />
                        <label for="odpA8">A) Faustin </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania8" id="odpB8" value="B" />
                        <label for="odpB8">B) CJ</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania8" id="odpC8" value="C" />
                        <label for="odpC8">C) Roman</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania8" id="odpD8" value="D" />
                        <label for="odpD8">D) Yewgieniy</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Co jest wykresem funkcji kwadratowej?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania9" id="odpA9" value="A" />
                        <label for="odpA9">A) jabola </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania9" id="odpB9" value="B" />
                        <label for="odpB9">B) ebola</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania9" id="odpC9" value="C" />
                        <label for="odpC9">C) hiperbola</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania9" id="odpD9" value="D" />
                        <label for="odpD9">D) parabola</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Pastafarianie to wyznawcy?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania10" id="odpA10" value="A" />
                        <label for="odpA10">A) niewidzialnego potwora spaghetti </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania10" id="odpB10" value="B" />
                        <label for="odpB10">B) ortodoksyjni wyznawcy odłamu islamu</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania10" id="odpC10" value="C" />
                        <label for="odpC10">C) fanatyczni wyznawcy Jezusa</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania10" id="odpD10" value="D" />
                        <label for="odpD10">D) inna nazwa świadków Jehovy</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>Jak inaczej mówi się na ziemniaki?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania11" id="odpA11" value="A" />
                        <label for="odpA11">A) ogórki </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania11" id="odpB11" value="B" />
                        <label for="odpB11">B) koniczyna</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania11" id="odpC11" value="C" />
                        <label for="odpC11">C) kartofle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania11" id="odpD11" value="D" />
                        <label for="odpD11">D) marchewki</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>Z jaką prędkością światło dociera do Ziemi?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania12" id="odpA12" value="A" />
                        <label for="odpA12">A) 50 000 000 km/h</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania12" id="odpB12" value="B" />
                        <label for="odpB12">B) z prędkością światła</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania12" id="odpC12" value="C" />
                        <label for="odpC12">C) z prędkością strusia pędziwiatra</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania12" id="odpD12" value="D" />
                        <label for="odpD12">D) 30 000 km/h</label>
                    </div>
                
                </li>
								<li>
                
                    <h3>Jak słownie napisać 50?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania13" id="odpA13" value="A" />
                        <label for="odpA13">A) pieńdziesiąt </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania13" id="odpB13" value="B" />
                        <label for="odpB13">B) piendziesiont</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania13" id="odpC13" value="C" />
                        <label for="odpC13">C) pięćdziesiąt</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania13" id="odpD13" value="D" />
                        <label for="odpD13">D) pięućdzięusiąułt</label>
                    </div>
                
                </li>
								<li>
                
                    <h3>Które koło samochodu najmniej zużywa sięna zakręcie?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania14" id="odpA14" value="A" />
                        <label for="odpA14">A) zapasowe </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania14" id="odpB14" value="B" />
                        <label for="odpB14">B) lewe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania14" id="odpC14" value="C" />
                        <label for="odpC14">C) tylne</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania14" id="odpD14" value="D" />
                        <label for="odpD14">D) środkowe</label>
                    </div>
                
                </li>
								<li>
                
                    <h3>Kto powiedział, że Ziemia krąży wokół słońca, a nie Słońce wokół Ziemi?</h3>
                    
                    <div>
                        <input type="radio" name="odpDoPytania15" id="odpA15" value="A" />
                        <label for="odpA15">A) Wladimir Putin </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania15" id="odpB15" value="B" />
                        <label for="odpB15">B) Izaak Newton</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania15" id="odpC15" value="C" />
                        <label for="odpC15">C) Galileusz</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="odpDoPytania15" id="odpD15" value="D" />
                        <label for="odpD15">D) Mikołaj Kopernik</label>
                    </div>
                
				</li>
				

			</ol>
			<div id="sub">
			<input type="submit" value="Zatwierdź" name="sub" class="sub" />
			</div>
		</form>
	</div>
	</body>
</html>
	
	<?php

	if(isset($_POST['sub'])){
		
		$_SESSION["pytanie1"] = $_POST['odpDoPytania1'];
		$_SESSION["pytanie2"] = $_POST['odpDoPytania2'];
		$_SESSION["pytanie3"] = $_POST['odpDoPytania3'];
		$_SESSION["pytanie4"] = $_POST['odpDoPytania4'];
		$_SESSION["pytanie5"] = $_POST['odpDoPytania5'];
		$_SESSION["pytanie6"] = $_POST['odpDoPytania6'];
		$_SESSION["pytanie7"] = $_POST['odpDoPytania7'];
		$_SESSION["pytanie8"] = $_POST['odpDoPytania8'];
		$_SESSION["pytanie9"] = $_POST['odpDoPytania9'];
		$_SESSION["pytanie10"] = $_POST['odpDoPytania10'];
		$_SESSION["pytanie11"] = $_POST['odpDoPytania11'];
		$_SESSION["pytanie12"] = $_POST['odpDoPytania12'];
		$_SESSION["pytanie13"] = $_POST['odpDoPytania13'];
		$_SESSION["pytanie14"] = $_POST['odpDoPytania14'];
		$_SESSION["pytanie15"] = $_POST['odpDoPytania15'];
		
		echo '<script type="text/javascript">';
		echo 'window.location.href="'."index3.php".'";';
		echo '</script>';
	}
	
	?>