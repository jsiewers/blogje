<?php 
$user = 'root';
$password = 'root';
$db = 'blogje';
$host = 'localhost';
$port = 8889;

$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

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