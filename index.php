<?php 


if($_SERVER['SERVER_NAME'] == "localhost") {
	$user = 'root';
	$password = 'root';
	$db = 'school';
	$host = 'localhost';
	$port = 8889;
} else {
	$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$db = 'blogje';
	$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
}

try {
	$dbh = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$db, $user, $password);
	foreach($dbh->query('SELECT * from student') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>


?>