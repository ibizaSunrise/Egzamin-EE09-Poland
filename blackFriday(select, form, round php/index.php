<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sklep papierniczy</title>
<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<header>
<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
</header>
<div class="wrapper">
<div class="main_left">
<h3>Promocja 15% obejmuje artykuły:</h3>
<ul>
<!-- script 1 -->
<?php
$id_polaczenia = mysqli_connect('localhost', 'root', '', 'sklep');
$query = "SELECT nazwa FROM towary WHERE promocja = 1";
$result = mysqli_query($id_polaczenia, $query);
while($f=mysqli_fetch_array($result)){
echo "<li>";
echo $f['nazwa'];
echo "</li>";
}
?>
</ul>
</div>
<div class="main_mid">
<h3>Cena wybranego artykułu w promocji</h3>

<form method="POST" action="index.php">
<select name="promo">
<option value="Gumka do mazania">Gumka do mazania</option>
<option value="Cienkopis">Cienkopis</option>
<option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
<option value="Markery 4 szt.">Markery 4 szt.</option>
</select>
<input type="submit" value="WYBIERZ">
</form>
<?php
$res = $_POST['promo'];
echo $res;
?>
<!-- script 2 -->
<?php
$select = $_POST['promo'];
$id_polaczenia = mysqli_connect('localhost', 'root', '', 'sklep');
$query = "SELECT cena FROM `towary` WHERE nazwa='$select'";
$result = mysqli_query($id_polaczenia, $query);
$f=mysqli_fetch_array($result);
$pr = round(($f['cena']*0.85), 2);
echo "<p>";
echo $pr;
echo "</p>";
?>
</div>
<div class="main_right">
<h3>Kontakt</h3>
<p>telefon: 123123123<br> e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
<img src="promocja2.png" alt="promocja">
</div>
</div>
<footer>
<h4>Autor strony: xxxxxxxx</h4>
</footer>
</body>
</html>