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
	echo "Niet gelukt ahhh jammer<br><br>";
}

echo getenv(OPENSHIFT_MYSQL_DB_HOST)."<br>";
echo getenv(OPENSHIFT_MYSQL_DB_PORT)."<br>";

?>