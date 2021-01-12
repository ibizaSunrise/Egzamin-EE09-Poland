<!DOCTYPE html>
<html lang = "pl">
<head>
	<meta charset = "utf-8">
	<title>Organizer</title>
	<link rel = "stylesheet" href="styl6.css">
</head>

<body>
	<div class = "baner">
		<div class = "baner__left">
		<h2>MÓJ ORGANAJZER</h2>
		</div>
		<div class = "baner__mid">
		<form method = "POST">
			<label>Wpis wydarzenia <input name = "wydarzenie"></label>
			<input type = "submit" value = "ZAPISZ">
		</form>
		<?php
		$id_polaczenia = mysqli_connect('localhost', 'root', '', 'egzamin6');
		$wydarzenie = $_POST['wydarzenie'];
		$query = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-08-27'";
		$result = mysqli_query($id_polaczenia,$query);
		?>
		</div>
		<div class = "baner__right">
		<img src="logo2.png" alt = 'Mój organajzer'>
		</div>
	</div>
	
	<div class = "main">
	
	<?php
	$id_polaczenia = mysqli_connect('localhost', 'root', '', 'egzamin6');
	$zapytanie = mysqli_query($id_polaczenia, "SELECT dataZadania, miesiac, wpis FROM zadania");
	while($result = mysqli_fetch_array($zapytanie)){
echo "<div class = 'oneDay'>";
echo "<h6>".$result['dataZadania'].", ".$result['miesiac']."</h6>";
echo "<br>";
echo "<p>".$result['wpis']."</p>";
echo "</div>";
}
	?>
	
	</div>
	
	<footer>
	<?php
	$id_polaczenia = mysqli_connect('localhost', 'root', '', 'egzamin6');
	$zapytanie = mysqli_query($id_polaczenia, "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01'");
	while($result = mysqli_fetch_array($zapytanie)){
	echo "<h1>". "miesiąc: ".$result['miesiac'].", "."rok: ".$result['rok']."</h1>";
	}
	mysqli_close($id_polaczenia); 
	?>
	<p>Strone wykonał: vvvvvvvvv</p>
	</footer>
	
</body>
</html>