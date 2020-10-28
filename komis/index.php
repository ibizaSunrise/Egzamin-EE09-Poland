<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="komis";

$link = mysqli_connect($host, $user, $password, $db_name);
$query = mysqli_query($link, "SELECT id, marka, model FROM `samochody`");
echo '<h1>Wykaz samochodów </h1><br>';
while ($wyn = mysqli_fetch_assoc($query))
	
echo $wyn['id'].'/ '.$wyn['marka'].'/ '.$wyn['model'].'<br>'
?>

<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="komis";

$link = mysqli_connect($host, $user, $password, $db_name);
$query = mysqli_query($link, "SELECT id, klient FROM `zamowienia`");
echo '<h1>Zamówienia </h1><br>';
while ($wyn = mysqli_fetch_assoc($query))
	
echo $wyn['id'].'/ '.$wyn['klient'].'<br>';

?>

<?php
$host = "localhost";
$user = "root";
$password="";
$db_name="komis";

$link = mysqli_connect($host, $user, $password, $db_name);
$query = mysqli_query($link, "SELECT * FROM samochody WHERE marka = 'Fiat'");
echo '<h1>Pełne dane: Fiat </h1><br>';
while ($wyn = mysqli_fetch_assoc($query))
	
echo $wyn['id'].'/ '.$wyn['marka'].'/ '.$wyn['model'].'/ '.$wyn['rocznik'].'/ '.$wyn['kolor'].'/ '.$wyn['stan'].'<br>';

?>
</body>
</html>