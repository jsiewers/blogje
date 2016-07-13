<?php 
$user = 'root';
$password = 'root';
$db = 'school';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if($success) {
	echo "De verbinding is gelukt";
} else {
	echo "Niet gelukt ahhh jammer";
}
?>