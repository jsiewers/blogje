<?php
include_once("lib/config.php");
include('lib/Db.php');
include('lib/Advertentie.php');

$db = new Db();
$conn = $db->getConnectie();
$sth = $conn->prepare("SELECT * FROM advertentie");
$sth->execute();
$advertenties = $sth->fetchAll(PDO::FETCH_CLASS, "Advertentie");

var_dump($advertenties);