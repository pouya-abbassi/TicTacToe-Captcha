<?php
session_start();

$ans = rand(1,9);
echo $ans;

for ($i = 1 ; $i < 10 ; $i++) {
	$sample = rand(1,2);
	switch ($sample) {
		case 1:
			$button = 'X';
			break;
		case 2:
			$button = ' ';
			break;
	}
}

switch ($ans) {
	case 1:
		$_SESSION['correct'] = 1;
		$pos = rand(1,3);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value=" "> </button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value=" "> </button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="O">O</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="O">O</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 3:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value=" "> </button></td>';
				echo '<td id="a2"><button type="button" value="O">O</button></td>';
				echo '<td id="a3"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 2:
		$_SESSION['correct'] = 2;
		$pos = rand(1,2);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value=" "> </button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="O">O</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="O">O</button></td>';
				echo '<td id="a2"><button type="button" value=" "> </button></td>';
				echo '<td id="a3"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 3:
		$_SESSION['correct'] = 3;
		$pos = rand(1,3);
		switch (variable) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value=" "> </button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value=" "> </button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="O">O</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 3:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="O">O</button></td>';
				echo '<td id="a2"><button type="button" value="O">O</button></td>';
				echo '<td id="a3"><button type="button" value=" "> </button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 4:
		$_SESSION['correct'] = 4;
		$pos = rand(1,2);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="O">O</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value=" "> </button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="O">O</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value=" "> </button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 5:
		$_SESSION['correct'] = 5;
		$pos = rand(1,4);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="O">O</button></td>';
				echo '<td id="a5"><button type="button" value=" "> </button></td>';
				echo '<td id="a6"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="O">O</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value=" "> </button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="O">O</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 3:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="O">O</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value=" "> </button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
			case 4:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value=" "> </button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="O">O</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 6:
		$_SESSION['correct'] = 6;
		$pos = rand(1,2);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="O">O</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value=" "> </button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value=" "> </button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 7:
		$_SESSION['correct'] = 7;
		$pos = rand(1,3);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value=" "> </button></td>';
				echo '<td id="a8"><button type="button" value="O">O</button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="O">O</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="O">O</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value=" "> </button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
			case 3:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="O">O</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value=" "> </button></td>';
				echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 8:
		$_SESSION['correct'] = 8;
		$pos = rand(1,2);
		switch ($pos) {
			case 1:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="O">O</button></td>';
				echo '<td id="a8"><button type="button" value=" "> </button></td>';
				echo '<td id="a9"><button type="button" value="O">O</button></td>';
				echo '</tr></table>';
				break;
			case 2:
				echo '<table id="table" border="0"><tr>';
				echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a2"><button type="button" value="O">O</button></td>';
				echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a5"><button type="button" value="O">O</button></td>';
				echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr><tr>';
				echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '<td id="a8"><button type="button" value=" "> </button></td>';
				echo '<td id="a9"><button type="button" value="' . $button . '">' . $button . '</button></td>';
				echo '</tr></table>';
				break;
		}
		break;
	case 9:
		$_SESSION['correct'] = 9;
		$pos = rand(1,3);
		switch ($pos) {
			case 1:
		echo '<table id="table" border="0"><tr>';
		echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '</tr><tr>';
		echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '</tr><tr>';
		echo '<td id="a7"><button type="button" value="O">O</button></td>';
		echo '<td id="a8"><button type="button" value="O">O</button></td>';
		echo '<td id="a9"><button type="button" value=" "> </button></td>';
		echo '</tr></table>';
				break;
			case 2:
		echo '<table id="table" border="0"><tr>';
		echo '<td id="a1"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a3"><button type="button" value="O">O</button></td>';
		echo '</tr><tr>';
		echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a5"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a6"><button type="button" value="O">O</button></td>';
		echo '</tr><tr>';
		echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a9"><button type="button" value=" "> </button></td>';
		echo '</tr></table>';
				break;
			case 3:
		echo '<table id="table" border="0"><tr>';
		echo '<td id="a1"><button type="button" value="O">O</button></td>';
		echo '<td id="a2"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a3"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '</tr><tr>';
		echo '<td id="a4"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a5"><button type="button" value="O">O</button></td>';
		echo '<td id="a6"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '</tr><tr>';
		echo '<td id="a7"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a8"><button type="button" value="' . $button . '">' . $button . '</button></td>';
		echo '<td id="a9"><button type="button" value=" "> </button></td>';
		echo '</tr></table>';
				break;
		}
		break;
}


for ($i = 1 ; $i < 10 ; $i++) {
	if ($i != $ans) {
		echo $i;
	}
}

?>
