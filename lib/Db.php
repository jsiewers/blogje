<?php

class Db {
	
	private $connectie;
	
	function getConnectie() {
		if($_SERVER['SERVER_NAME'] == "localhost") {
			$user = 'root';
			$password = 'root';
			$db = 'blogje';
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
			$this->connectie = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$db, $user, $password);
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		
		return $this->connectie;
	}
	
	
	
}
