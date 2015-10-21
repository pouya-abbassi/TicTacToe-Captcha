<?php

session_start();

$redirect = 'http://pouyacode.net';	// put the url you want to redirect here.

if ($_SESSION['result'] == 1) {
	header('Location: ' . $redirect);
} else {
	# code...
}

?>