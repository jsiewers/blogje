<?php
include_once('lib/Db.php');
include_once('lib/Gebruiker.php');
include_once('lib/Reactie.php');

class Advertentie {
	private $idadvertentie;
	private $idgebruiker;
	private $titel;
	private $advertentietekst;
	private $urlfoto;
	
	function __construct() {
		
	}
	
	function getIdGebruiker() {
		return $this->idgebruiker;
	}
	
	function getIdAdvertentie() {
		return $this->idadvertentie;
	}
	
	function getReactiesByIdAdvertentie() {
		$db = new Db();
		$conn = $db->getConnectie();
		$sth = $conn->prepare("SELECT * FROM reactie WHERE idadvertentie = ".$this->idadvertentie);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_CLASS, "Reactie");
	}

	
	function getAdvertentieById($id) {
		$db = new Db();
		$conn = $db->getConnectie();
		$sth = $conn->prepare("SELECT * FROM advertentie WHERE idadvertentie = ".$id);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Advertentie');
		return $sth->fetch();	
	}
	

	function getGebruikerById() {
		$db = new Db();
		$conn = $db->getConnectie();
		$sth = $conn->prepare("SELECT * FROM gebruiker WHERE idgebruiker = ".$this->idgebruiker);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Gebruiker');
		return $sth->fetch();	
	}
	
	function insertAdvertentie() {
		$db = new Db();
		$conn = $db->getConnectie();
		$query = "INSERT INTO Advertentie (idgebruiker, titel, advertentietekst, urlfoto) "
				."VALUES (:idgebruiker, :titel, :advertentietekst, :urlfoto)";
		$sth = $conn->prepare($query);
		$sth->bindParam(':idgebruiker', $this->idgebruiker, PDO::PARAM_INT);
		$sth->bindParam(':titel', $this->titel, PDO::PARAM_STR);
		$sth->bindParam(':advertentietekst', $this->advertentietekst, PDO::PARAM_STR);
		$sth->bindParam(':urlfoto', $this->urlfoto, PDO::PARAM_STR);
		return $sth->execute();
	}
	
	function getTitel() {
		return $this->titel;
	}
	
	function getAdvertentietekst() {
		return $this->advertentietekst;
	}
	
	function getUrlFoto() {
		return $this->urlfoto;
	}
	
	function setIdGebruiker($id) {
		$this->idgebruiker = $id;
	}
	
	function setTitel($titel) {
		$this->titel = $titel;
	}
	
	function setAdvertentieTekst($at) {
		$this->advertentietekst = $at;
	}
	
	function setUrlFoto($urlfoto) {
		$this->urlfoto = $urlfoto;
	}
	
	
	
}