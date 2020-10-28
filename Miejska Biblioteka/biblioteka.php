<?php
//Skrypt 1
$host = "127.0.0.1";
$user = "root";
$password = "";
$db_name = "biblioteka";

$connect = mysqli_connect($host, $user, $password, $db_name);

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$rok = $_POST['rok'];

echo "Czytelnik: ".$nazwisko."został dodany do bazy danych";

$kod = $imie[0].$imie[1].$rok[0].$rok[1].$nazwisko[0].$nazwisko[1];

$query = "INSERT INTRO `czytelnicy` VALUES (NULL, $imie, $nazwisko, $kod)";
$result = mysqli_query($connect,$query);

?>

<?php
//Skrypt 2
$host = "127.0.0.1";
$user = "root";
$password = "";
$db_name = "biblioteka";

$connect = mysqli_connect($host, $user, $password, $db_name);
$query="SELECT imie, nazwisko FROM `czytelnicy`";
$result = mysqli_query($connect,$query);
echo "<ul>";
while($f=mysqli_fetch_assoc($result)){
echo "<li>";
echo $f['imie']. " ".$f['nazwisko'];
echo "</li>"
}
echo "</ul>"

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Biblioteka publiczna</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
</header>
<div class = "wrapper">
<div class="left">
<h2>Dodaj czytelnika</h2>
<form method="POST"  action="biblioteka.php">
imie: <input type="text" name="imie"><br>
nazwisko: <input type="text" name="nazwisko"><br>
rok urodzenia: <input type="number" name="rok"><br>
<input type="button" value="DODAJ">
</form>
2/1
</div>
<div class="mid">
<div class="mid_img">
<img src="biblioteka.png" alt="biblioteka">
</div>
<div class="mid_text">
<h4>ul. Czytelnicza 25<br> 12-120 Książkowice<br> tel.: 123123123<br> e-mail: <a href="mailto:biuro@bib.pl">"biuro@bib.pl</a></h4>
</div>
</div>
<div class="right">
<h3>Nasi czytelnicy:</h3>
2
</div>
</div>
<footer>
<p>Projekt witryny: 0000000</p>
</footer>
</body>
</html>