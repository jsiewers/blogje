<?php
function password_hash($password, $options) {
	return sha1($password.getSalt());
}

function password_verify($password, $hash) {
	if($hash == sha1($password.getSalt())) {
		return true;
	} else {
		return false;
	}
}

function getSalt() {
	return "!3$rudEDw#$@";
}