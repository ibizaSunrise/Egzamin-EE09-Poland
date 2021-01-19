<!DOCTYPE html>
<html>
<head lang = "pl">
	<meta charset = "utf-8">
	<title>Pogotowie Ratunkowe</title>
	<link rel = "stylesheet" href = "styl5.css">
</head>
<body>
	<h2>Zgloszenie przyjente!</h2>
	<a href = "pogotowie.html">Wróć do strony gównej</a>
</body>
</html>




<?php
	$id_polaczenia = mysqli_connect("localhost", "root", "", "ratownictwo");
	$nz = $_POST['nz'];
	$nd = $_POST['nd'];
	$adres = $_POST['adres'];
	$result = mysqli_query($id_polaczenia, "INSERT INTO zgloszenia VALUES (NULL, $nz, $nd, '$adres', 0, CURTIME())");
	mysqli_close($id_polaczenia);
?>