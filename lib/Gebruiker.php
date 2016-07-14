<?php
include_once('lib/Db.php');

class Gebruiker {
	private $idGebruiker;
	private $voornaam;
	private $tussenvoegsel;
	private $achternaam;
	private $login;
	private $password;
	
	function __construct() {
		
	}
	
	function getFullName() {
		return $this->voornaam." ".$this->tussenvoegsel." ".$this->achternaam;
	}
	
	function getLogin() {
		return $this->login;
	}
	
	function getPassword() {
		return $this->password;
	}
	
	function setVoornaam($voornaam) {
		$this->voornaam = $voornaam;
	}
	
	function setTussenvoegsel($tussenvoegsel) {
		$this->tussenvoegsel = $tussenvoegsel;
	}
	
	function setAchternaam($achternaam) {
		$this->achternaam = $achternaam;
	}
	
	function setLogin($login) {
		$this->login = $login;
	}
	
	function setPassword($password) {
		$this->password = $password;
	}
	
	function insertGebruiker() {
		$db = new Db();
		$conn = $db->getConnectie();
		$query = "INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, login, password) "
				."VALUES(:voornaam, :tussenvoegsel, :achternaam, :login, :password)";
		$sth = $conn->prepare($query);
		$sth->bindParam(':voornaam', $this->voornaam, PDO::PARAM_STR);
		$sth->bindParam(':tussenvoegsel', $this->tussenvoegsel, PDO::PARAM_STR);
		$sth->bindParam(':achternaam', $this->achternaam, PDO::PARAM_STR);
		$sth->bindParam(':login', $this->login, PDO::PARAM_STR);
		$sth->bindParam(':password', $this->password, PDO::PARAM_STR);
		return $sth->execute();
	}
	
	function checkLogin($org_password, $login) {
		$db = new Db();
		$conn = $db->getConnectie();
		$query = "SELECT * FROM gebruiker WHERE login = :login";
		$sth = $conn->prepare($query);
		$sth->bindParam(':login', $login, PDO::PARAM_STR);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_CLASS, 'Gebruiker');
		$gebruiker = $sth->fetch();
		if($gebruiker && password_verify($org_password, $gebruiker->getPassword())) {
			return $gebruiker;
		} else {
			return false;
		}
		
	}
}