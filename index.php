<?php 
$user = 'root';
$password = 'root';
$db = 'school';
$host = 'localhost';
$port = 8889;

$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');

print($host);

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
	echo "Niet gelukt ahhh jammer<br><br>";
}


?>