<?php
$tytul=$_POST['tytul'];
$gatunek=$_POST['gatunek'];
$rok=$_POST['rok'];
$ocena=$_POST['ocena'];

$connect = mysqli_connect("localhost", "root", "", "dane");
$query ="INSERT INTO `filmy` (id, gatunki_id, tytul, rok, ocena) VALUES(NULL, '$gatunek', '$tytul', '$rok', '$ocena')"; 
$result=mysqli_query($connect, $query);

if($result == true){
	echo "Film " .$tytul. " ". "został dodany do bazy";
}
?>