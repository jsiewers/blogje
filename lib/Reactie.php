<?php
include_once("lib/Db.php");
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
	
	function setReactietekst($text) {
		$this->reactietekst = $text;
	}
	
	function setIdGebruiker($id) {
		$this->idgebruiker = $id;
	}
	
	function setIdAdvertentie($id) {
		$this->idadvertentie = $id;
	}
	
	function insertReactie() {
		$db = new Db();
		$conn = $db->getConnectie();
		$query = "INSERT INTO Reactie (idgebruiker, idadvertentie, reactietekst) "
				."VALUES (:idgebruiker, :idadvertentie, :reactietekst)";
				$sth = $conn->prepare($query);
				$sth->bindParam(':idgebruiker', $this->idgebruiker, PDO::PARAM_INT);
				$sth->bindParam(':idadvertentie', $this->idadvertentie, PDO::PARAM_INT);
				$sth->bindParam(':reactietekst', $this->reactietekst, PDO::PARAM_STR);
				return $sth->execute();
	}
	
		
}

