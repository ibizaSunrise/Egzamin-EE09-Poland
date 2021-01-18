<?php
$id_polaczenia = mysqli_connect("localhost", "root", "", "wedkarstwo");

$lowisko = $_POST["lowisko"];
$data = $_POST["data"];
$sedzia = $_POST["sedzia"];

$result = mysqli_query($id_polaczenia, "INSERT INTO zawody_wedkarskie 
SET karty_wedkarskie_id = 0,
lowisko_id = $lowisko,
data_zawodow = '$data',
sedzia = '$sedzia'");

mysqli_close($id_polaczenia);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Wędkowanie - moje hobby</title>
	<link rel = "stylesheet" href = "styl5.css">
</head>
<body>
<h2>Zgloszenie dodano do bazy!</h2>
<a href = "zawody.html">wróć do strony</a>
</body>
</html>




