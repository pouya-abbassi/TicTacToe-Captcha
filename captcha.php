<?php
if (1 > $_GET["q"] || $_GET["q"] > 9) {
	echo "Wrong answer.";
}elseif ( $_GET["q"] == 5) {
	echo "Awesome!";
}else {
	echo "Wrong answer.";
}
?>