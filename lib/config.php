<?php
session_start();

if(PHP_MAJOR_VERSION < 7 && PHP_MINOR_VERSION < 5) {
	//echo "Versie: ".phpversion(). " is lager dan versie 5.5";
	include("lib/compatibility_functions.php");
} else {
	//echo "Versie: ".phpversion(). " is 5.5 of hoger";
}