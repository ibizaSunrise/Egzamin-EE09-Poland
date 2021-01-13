<!DOCTYPE html>
<html lang = "pl">
<head>
	<meta charset = "utf-8">
	<title>Mój kalendarz</title>
	<link rel = "stylesheet" href = "styl5.css">
</head>
<body>
	<div class = "header__left">
		<img src = "logo1.png" alt="Mój kalendarz">
	</div>
	<div class = "header__right">
		<h1>KALENDARZ</h1>
<?php
	$id_polaczenia = mysqli_connect("localhost", "root", "", "egzamin5");
	$result = mysqli_query($id_polaczenia, "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01'")or die(mysqli_error($id_polaczenia));
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	
	foreach($data as $elem){
	echo "<h3>"."miesiąc: ".$elem['miesiac'].", ". "rok: ".$elem['rok']."</h3>";
	}
?>
	</div>
	<div class = "main">
<?php

$result1 = mysqli_query($id_polaczenia, "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec'")or die(mysqli_error($id_polaczenia));
for ($data = []; $row = mysqli_fetch_assoc($result1); $data[] = $row);
foreach($data as $elem){
	echo "<div class = 'main__one'>"."<h5>".$elem['dataZadania']."</h5>". "<p>".$elem['wpis']."</p>"."</div>";
	}
?>

	</div>
	<footer>
	<form method = "POST">
	Dodaj wpis: <input type = "text" name = "wpis">
	<input type = "submit" value = "DODAJ">
	</form>
<?php
$wpis = $_POST['wpis'];
$result2 = mysqli_query($id_polaczenia, "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13'");

mysqli_close($id_polaczenia);
?>	
	<p>Strone wykonał: xxxxxxxx</p>
	</footer>
</body>
</html>