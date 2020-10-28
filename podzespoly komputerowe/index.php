<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Nasz sklep komputerowy</title>
<link rel="stylesheet" type="text/css" href="styl8.css">
</head>
<body>
<header>
<div class="header_menu">
<a href="index.php">Główna</a>
<a href="procesory.html">Procesory</a>
<a href="ram.html">RAM</a>
<a href="grafika.html">Grafika</a>
</div>
<div class="header_logo">
<h2>Podzespoły komputerowe</h2>
</div>
</header>
<main>
<h1>Dzisiejsze promocje</h1>
<table>
<tr>
<th>NUMER</th>
<th>NAZWA PODZESPOŁU</th>
<th>OPIS</th>
<th>CENA</th>
</tr>
<?php
$id_polaczenia = mysqli_connect("localhost", "root", "", "sklep1");
$zapytanie = mysqli_query($id_polaczenia, "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000");

while($result = mysqli_fetch_array($zapytanie)){
echo "<tr>";
echo "<td>".$result['id']."</td>"."<td>".$result['nazwa']."</td>"."<td>".$result['opis']."</td>"."<td>".$result['cena']."</td>";
echo "</tr>";
}
mysqli_close($id_polaczenia); 
?>
</table>
</main>
<footer>
<div class="footer_img">
<img src="scalak.jpg" alt="promocje na procesory">
</div>
<div class="footer_about">
<h4>Nasz Sklep Komputerowy</h4>
<p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
</div>
<div class="footer_phon">
<p>zadzwoń: 601 602 603</p>
</div>
<div class="footer_autor">
<p>Stronę wykonał: ZZZZZZZZ</p>
</div>
</footer>
</body>
</html>