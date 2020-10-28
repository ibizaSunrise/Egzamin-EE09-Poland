<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wynajmujemy samochody</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<header>
<h1>Wynajem Samochodów</h1>
</header>
<main>
<div class="block_left">
<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>

<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="wynajem";

$link = mysqli_connect($host, $user, $password, $db_name);

$result = mysqli_query($link, "SELECT id, model, kolor FROM `samochody` WHERE marka = 'Toyota' AND rocznik=2014;");

while($f=mysqli_fetch_assoc($result)){
	echo $f['id']. " ".$f['model']. " ".$f['kolor'];
}
mysqli_close($link);
?>
<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>

<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="wynajem";

$link = mysqli_connect($host, $user, $password, $db_name);

$result = mysqli_query($link, "SELECT id, model, kolor, rocznik FROM `samochody`;");

while($f=mysqli_fetch_assoc($result)){
	echo $f['id']. " ".$f['model']. " ".$f['kolor']. " ".$f['rocznik'].'<br>';
}
mysqli_close($link);
?>
</div>
<div class="block_mid">
<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="wynajem";

$link = mysqli_connect($host, $user, $password, $db_name);

$result = mysqli_query($link, "SELECT s.id, s.model, z.telefon FROM samochody s, zamowienia z WHERE s.id=z.samochody_id;");

while($f=mysqli_fetch_assoc($result)){
	echo $f['id']. " ".$f['model']. " ".$f['telefon'].'<br>';
}
mysqli_close($link);
?>
</div>
<div class="block_right">
<h2>NASZA OFERTA</h2>
<ul>
<li>Fiat</li>
<li>Toyota</li>
<li>Opel</li>
<li>Mercedes</li>


</ul>
<p>Tu pobierzesz<a href = "./baza.sql"> naszą  baze danych</a></p>
<p>autor strony: xxxxxxxx</p>
</div>
</main>

</body>
</html>