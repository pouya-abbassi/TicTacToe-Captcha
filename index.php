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
	<table id="table" border="0">
		<tr>
			<td id="a1"><button type="button" value="1"> </button></td>
			<td id="a2"><button type="button" value="2"> </button></td>
			<td id="a3"><button type="button" value="3">O</button></td>
		</tr>
		<tr>
			<td id="b1"><button type="button" value="4">X</button></td>
			<td id="b2"><button type="button" value="5"> </button></td>
			<td id="b3"><button type="button" value="6">O</button></td>
		</tr>
		<tr>
			<td id="c1"><button type="button" value="7">O</button></td>
			<td id="c2"><button type="button" value="8">X</button></td>
			<td id="c3"><button type="button" value="9">X</button></td>
		</tr>
	</table>
	<p id="answer"></p>
</body>
</html>
<br><button id='retry' type='button' style='width:auto; display:none;' onclick="$('button').prop('disabled', false);">retry</button>
