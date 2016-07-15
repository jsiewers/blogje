<?php
include('lib/Db.php');

$db = new Db();
$conn = $db->getConnectie();
$sth = $conn->prepare("SELECT * FROM Advertentie");
$sth->execute();
$advertenties = $sth->fetchAll(PDO::FETCH_CLASS, "Advertentie");

var_dump($advertenties);