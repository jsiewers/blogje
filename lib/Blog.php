<?php
include_once("lib/Db.php");
include_once("lib/Advertentie.php");

class Blog {
	private $advertenties;
	
	function __construct() {
		$this->advertenties = array();
	}
	
	function getAdvertenties() {
		return $this->advertenties;
	}
	
	function voegAdvertentieToe($advertentie) {
		$this->advertenties($advertentie);
		
	}
	
	function selectAdvertenties() {
		$db = new Db();
		$conn = $db->getConnectie();
		$sth = $conn->prepare("SELECT * FROM Advertentie");
		$sth->execute();	
		$this->advertenties = $sth->fetchAll(PDO::FETCH_CLASS, "Advertentie");
	}
}