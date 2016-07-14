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
	
	function getTitel() {
		return $this->titel;
	}
	
	function getAdvertentietekst() {
		return $this->advertentietekst;
	}
	
	function getUrlFoto() {
		return $this->urlfoto;
	}
	
}