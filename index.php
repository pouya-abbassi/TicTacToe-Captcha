<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TicTacToe Captcha</title>
	<link rel="stylesheet" href="style.css">
	<script src="jquery-2.1.4.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<h3>TicTacToe Captcha</h3>
	<p>The captcha that doesn't hurt!
	<br><br>
	You are "O" and it's your turn.<br>Tap on the right place to win!</p>

	<?php require 'db.php'; ?>

	<div id="answer"></div>	<!-- the resault of ajax will be displayed here -->
	<br>
	<a href="http://pouyacode.net" id='go'><button type='button' id='continue'>continue</button></a>	<!-- The continue button -->
	<button id='retry' type='button' onclick="$('button').prop('disabled', false);">retry</button>	<!-- retry button. hidden by default. inline js script to make buttons reusable. -->
</body>
</html>
