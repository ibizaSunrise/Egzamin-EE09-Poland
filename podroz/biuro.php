<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
	<link rel = "stylesheet" type="text/css" href="styl4.css">
   
</head>
<body>
<header>
<h1>WITAMY W BIURZE PODRÓŻY</h1>
</header>
<div class="info-top">
<h3>ARCHIWUM WYCIECZEK</h3>
<?php
$id_polaczenia = mysqli_connect('localhost', 'root', '', 'egzamin4');
$zapytanie = mysqli_query($id_polaczenia, "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0");
while($result = mysqli_fetch_array($zapytanie)){
echo $result['id'].'. '.$result['cel'].', cena: '.$result['cena'].'<br>';
}

mysqli_close($id_polaczenia); 
?>
</div>
<div class="main">
<div class = "main-left">
<h3>NAJTANIEJ...</h3>
<table>
<tr><td>Włochy</td><td>od 1200 zł</td></tr>
<tr><td>Francja</td><td>od 1200 zł</td></tr>
<tr><td>Hiszpania</td><td>od 1400 zł</td></tr>
</table>
</div>
<div class = "main-mid">
<h3>TU BYLIŚMY</h3>
<div class="container">
<div class="img-wrapper">

<?php
$id_polaczenia = mysqli_connect('localhost', 'root', '', 'egzamin4');
$zapytanie = mysqli_query($id_polaczenia, "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC");
while($result = mysqli_fetch_array($zapytanie)){
echo "<img"." ". "src=".$result["nazwaPliku"]." "."alt=".$result["podpis"].">";
}
mysqli_close($id_polaczenia); 
?>
</div>
</div>
</div>
<div class = "main-right">
<h3>SKONTAKTUJ SIĘ</h3>
<a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
<p>telefon: 555666777</p>
</div>
</div>
<footer>
<p>Strone wykonał: xxxxxxxxx</p>
</footer>  
</body>
</html>