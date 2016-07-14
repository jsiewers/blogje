<?php
include_once("lib/Gebruiker.php");

class Reactie {
	private $idreactie;
	private $idadvertentie;
	private $idgebruiker;
	private $reactietekst;
	
	function __construct() {
	
	}
	
	function getReactietekst() {
		return $this->reactietekst;
	}
	
	function getGebruikerById() {
		$db = new Db();
		$conn = $db->getConnectie();
		$sth = $conn->prepare("SELECT * FROM gebruiker WHERE idgebruiker = ".$this->idgebruiker);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Gebruiker');
		return $sth->fetch();
	}
		
}

