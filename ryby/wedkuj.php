<!DOCTYPE html>
<html lang = "pl">
<head>
	<meta charset = "utf-8">
	<title>Wędkujemy</title>
	<link rel = "stylesheet" href = "styl_1.css">
</head>
<body>
	<header>
		<h1>Portal dla wędkarzy</h1>
	</header>
	<div class = "left">
		<h2>Ryby drapieżne naszych wód</h2>
		
<?php
	$id_polaczenia = mysqli_connect('localhost', 'root', '', 'wedkowanie');
	$result = mysqli_query($id_polaczenia, "SELECT nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1");
	echo "<ul>";
	while($f = mysqli_fetch_assoc($result)){
		echo "<li>".$f['nazwa'].", wystepowanie: ".$f['wystepowanie']."</li>"."<br>";
	}
	echo "</ul>";
?>
		
	</div>
	<div class = "right">
		<img src = "ryba1.jpg" alt = "Sum"><br>
		<a href = "kwerendy.txt" download>Pobierz kwerendy</a>
	</div>
	<footer>
		<p>Stronę wykonał: xxxxxxx</p>
	</footer>
</body>
</html>