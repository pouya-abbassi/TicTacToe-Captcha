$(document).ready(function(){
	$("button").click(function(){
		if ($(this).html() == " ") {
			$(this).html("O");
			showHint($(this).val());
		};
	});
});

function showHint(str) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("answer").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "captcha.php?q="+str, true);
	xmlhttp.send();
}
