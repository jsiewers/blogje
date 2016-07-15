<?php
print_r($_SERVER);
$software = explode(" ", $_SERVER['SERVER_SOFTWARE']);
print_r($software);
echo phpversion();