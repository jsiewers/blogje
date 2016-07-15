<?php
function password_hash($password, $options) {
	return md5($password);
}

function password_verify($password, $hash) {
	if($hash == md5($password)) {
		return true;
	} else {
		return false;
	}
}


